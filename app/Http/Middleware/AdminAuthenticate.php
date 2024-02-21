<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if($user) {
            if($user->role == 'admin') {
                return $next($request);
            }
            else {
                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

            }
        }

        return redirect()->route('admin.login');
    }
}
