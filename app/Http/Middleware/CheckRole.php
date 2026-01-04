<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role == $role) {
            return $next($request);
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('books.index');
        }

        if (Auth::user()->role == 'user') {
            return redirect()->route('user.index');
        }

        return redirect('/login');
    }
}