<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view("register.index");
    }

    public function login()
    {
        return view("login.index");
    }

    public function register2(Request $request)
    {
        $validated = $request->validate([
            "email"=> "required|email|unique:users",
            "password"=> "required|string|min:8|confirmed",
        ]);

        $role = 'user';
        if (str_contains($validated['email'], '@admin.com')) {
            $role = 'admin';
        }

        $user = User::create([
            'name' => explode('@', $validated['email'])[0],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $role,
        ]);

        return redirect()->route("login.index")->with('success', 'Registrasi berhasil! Silakan masuk.');
 
    
    }

    public function login2(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->route('books.index');
            }

            return redirect()->route("user.index")->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
