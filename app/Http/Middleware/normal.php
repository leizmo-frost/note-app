<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use illuminate\Support\Facades\Auth;

class normal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!\Illuminate\Support\Facades\Auth::check()){
            return redirect()->route('Login');
        }

        $userRole=Auth::user()->role;

        if ($userRole==2){
            return $next($request);
        }

        if ($userRole==1){
            return redirect()->route('admin');
        }

        return $next($request);
    }
}
