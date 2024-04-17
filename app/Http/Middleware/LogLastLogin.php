<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogLastLogin
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        if (Auth::check()) {
            $user = Auth::user();
            $user->last_login_date = now();
            $user->last_login_ip = $request->ip();
            $user->save();
        }
        return $response;
    }
}
