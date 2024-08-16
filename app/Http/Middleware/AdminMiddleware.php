<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('signin'); // Custom sign-in route
        }

        if (!Auth::user()->isAdmin) {
            return redirect('/'); // Redirect non-admin users appropriately
        }

        return $next($request);
    }
}
