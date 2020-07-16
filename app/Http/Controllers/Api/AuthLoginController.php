<?php

namespace App\Http\Controllers\Api;

use App\Traits\GeneralTrait;
use App\Http\Resources\UserResource as UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class AuthLoginController extends Controller
{
    use GeneralTrait; //must put here not above in use 
    use ApiResponseTrait;

    public function __construct()
    {

        // $this->middleware('admin_api', ['except' => ['login']]);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'email_address' => 'required|email',
            'password' => 'required|string|min:6',

        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors()->toJson(), 404);
        }

        $user = User::where('email', '=', $request->get('email_address'))->first();
        if ($user) {
            return $this->apiResponse(null, 'mail is already  exist', 400);
        }
        $admin = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email_address'),
            "password" => bcrypt($request->password),


        ]);

        $token = JWTAuth::fromUser($admin);
        $admin = collect($admin);
        $admin->put('access_token', $token);
        // $data=[
        //    'user'=> $admin,
        //    'token'=> $token
        // ];
        $data = new UserResource($admin);
        return $this->apiResponse(array($admin), 'User Register Successfully', 201);
        // return response()->json(compact('admin','token'),201);
    }

    // login user & create token
    public function login(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'password' => 'required|string',
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {

            return $this->apiResponse(null, $validator->errors()->toJson(), 404);
        }

        $credentials = $request->only("email", "password");
        if ($token = $this->guard('user_api')->attempt($credentials)) {
            $admin = User::where('email', '=', $request->get('email'))->first();
            $admin = collect($admin);
            $admin->put('access_token', $token);

            return $this->apiResponse(array($admin), 'all Data Get Success', 201);


            // return $this->respondWithToken($token);
        }
        return $this->apiResponse(null, $this->guard('user_api')->attempt($credentials), 400);
        // return response()->json(["error" => "Your Email/Password is wrong"], 401);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'password' => 'required|confirmed',
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {

            return $this->apiResponse(null, $validator->errors()->toJson(), 404);
        }
     
        $credentials = $request->only(
            'email',
            'password',
            'password_confirmation'
        );

        $user = User::where('email', '=', $request->get('email'))->first();
      
        if (!$user) {
            return $this->apiResponse(null, 'mail is not  exist', 400);
        }
        $user->password = bcrypt($request->password);

        $user->update();

        $token = JWTAuth::fromUser($user);
        $data = [
            'user' => $user,
            'token' => $token
        ];
        return $this->apiResponse($data, 'Rest your Password Successfully', 201);
        // return response()->json(compact('user','token'),201);

    }
    // refresh JWT token
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    // get authenticated user
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json(['data' => $user]);
    }

    // logout user form application
    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            "status" => "success",
            "msg" => "Logged out successfully."
        ], 200);
    }

    private function guard()
    {
        return Auth::guard('user_api');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            // 'token_type' => 'bearer'
        ]);
    }
}
