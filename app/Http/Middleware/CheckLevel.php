<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLevel
{
    
    public function handle(Request $request, Closure $next, $level): Response
    {
        if(Auth::check() && Auth::user()->level === $level){
            return $next($request);
        } else {
            return redirect('/dashboard');
        }
    }
}
