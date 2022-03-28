<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Header set Access-Control-Allow-Credentials', "true")
        ->header('Header set Access-Control-Allow-Methods', "GET, POST, PUT, DELETE, OPTIONS")
        ->header('Header set Access-Control-Allow-Headers', "X-Requested-With,Content-Type,Authorization")
        ->header('Header set Access-Control-Max-Age', "864000");
        
        
        
    }
}
