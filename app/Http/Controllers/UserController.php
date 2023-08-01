<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'Register';
        return view('user.register', $data);
    }
    public function register_store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:6|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        $user->save();
        return redirect()->route('login')->with('Sukses', 'Registrasi berhasil btolong untuk login');
    }
    public function login(){
        $data['title'] = 'Login';
        return view('user.login', $data);
    }
    public function login_store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $data['title'] = 'Login';
            return redirect()->route('Dashboard');
        }

        // Jika login gagal, redirect kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
        ]);
    }
    public function logout(){
        Auth::logout();
        $data['title'] = 'Login';
        return view('user.login', $data);
    }

    public function dashboard_controller(){
        $user = Auth::user();
        return view('Dasboard', compact('user'));
    }
}