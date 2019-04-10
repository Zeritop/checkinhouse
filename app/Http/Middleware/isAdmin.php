<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    
    public function handle($request, Closure $next){
        
        if(auth()->check() && $request->user()->admin == 0){
            return redirect()->guest('../index');
        }
        
        return $next($request);
        
    }
     
}