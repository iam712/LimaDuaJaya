<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (!Auth::check()) {
            return redirect()->route('signin'); // Redirect to your custom sign-in page
        }

        if (!Auth::user()->isAdmin) {
            return redirect('/'); // Redirect non-admin users to the homepage
        }

        return $next($request);
    }
}
