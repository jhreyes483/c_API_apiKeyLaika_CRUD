<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class apiKeyLaika{

    public function handle(Request $request, Closure $next){
       $headerTokenLaika = $request->header('api-key-laika');
       if(!isset($headerTokenLaika) || $headerTokenLaika == ''){
           return response()->json(['status'=>'ok','msg'=>'Accesos no autorizado'], 400 );
       }else{
           return $next($request);
       }





    }
}
