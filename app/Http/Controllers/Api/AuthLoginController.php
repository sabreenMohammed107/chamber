<?php

namespace App\Http\Controllers\Api;
 use App\Traits\GeneralTrait ;
use App\Http\Resources\PostResource as PostResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
class AuthLoginController extends Controller
{
    // use GeneralTrait; //must put here not above in use 
    use ApiResponseTrait; 
    public function __construct()
	{
		
		// $this->middleware('admin_api', ['except' => ['login']]);
	}
    public function register(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors()->toJson(),400);
                // return response()->json($validator->errors()->toJson(), 400);
        }

        $admin = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            "password" => bcrypt($request->password),

           
        ]);

        $token = JWTAuth::fromUser($admin);
        $data=[
           'user'=> $admin,
           'token'=> $token
        ];
        return $this->apiResponse($data,'all Data Get Success',201);
        // return response()->json(compact('admin','token'),201);
    }
  
    // login user & create token
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
           
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $credentials = $request->only("email", "password");
        if ($token = $this->guard('user_api')->attempt($credentials)) {
            $data=[
               
                'token'=> $token
             ];
            return $this->apiResponse($data,'all Data Get Success',200);

            // return $this->respondWithToken($token);
        }
        return $this->apiResponse(null,$validator->errors()->toJson(),401);
        // return response()->json(["error" => "Your Email/Password is wrong"], 401);
    }

    public function resetPassword(Request $request)
	{
		$this->validate($request, [
		
			'email' => 'required|email',
			'password' => 'required|confirmed',
		]);

		$credentials = $request->only(
			'email', 'password', 'password_confirmation'
		);

	$user=User::where('email','=',$request->get('email'))->first();
			$user->password = bcrypt($request->password);

			$user->update();

            $token = JWTAuth::fromUser($user);
            $data=[
                'user'=> $user,
                'token'=> $token
             ];
             return $this->apiResponse($data,'all Data Get Success',201);
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