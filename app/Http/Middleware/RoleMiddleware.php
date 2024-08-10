<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Jika pengguna tidak memiliki peran yang benar, redirect ke halaman yang sesuai
            return redirect('/user/dashboard'); // Atau halaman lain yang sesuai
        }

        return $next($request);
    }
}