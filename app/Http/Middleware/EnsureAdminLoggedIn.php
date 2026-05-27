<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdminLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please log in to access the admin panel.');
        }

        return $next($request);
    }
}