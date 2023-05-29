<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisController extends Controller
{
    public function loginView()
    {
        return view("login", [
            "title" => "Login",
        ]);
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 1) {
                // Jika user adalah admin, redirect ke panel admin
                return redirect()->route('admin.dashboard');
            } else {
                // Jika user adalah user biasa, redirect ke halaman home
                return redirect()->route('home');
            }
        } else {
            // Jika login gagal, redirect kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function regisView()
    {
        return view("regis", [
            "title" => "Registrasi",
        ]);
    }

    public function regisProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect()->route('login')->with("success", "Registrasi Berhasil");
    }
}
