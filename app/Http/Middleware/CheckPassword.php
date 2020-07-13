<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if($request->getUser() != env('API_EMAIL') || $request->getPassword() != env('API_PASSWORD')) {
        //     return response()->json(['message'=>'unauthenticates.']);
        //     }
        if($request->api_password !== env("API_PASSWORD",$default='12345678')){
            return response()->json(['message'=>$request->api_password]);
            }
            
        return $next($request);
    }
}
