<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register_process(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            // 'password_confirmation' => ['required']
        ]);
    
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'password_confirmation' => ['required', 'confirmed']
        ]);
    
        if ($user) {
            auth('web')->login($user);
        }
    
        return redirect()->route('admin_layout');
    }  
    public function register(Request $request) {
        return view('register');
    }
    public function login(Request $request) {
        return view('login');
    }

    public function login_process(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        if (auth('web')->attempt($data)) {
            return redirect()->route('admin_layout');
        } else {
            return redirect()->route('login')->withErrors([
                'email' => 'Email или пароль введены неверно!'
            ]);
        }
    }
    public function exit()
    {
        auth('web')->logout();
        return redirect()->route('home');
    }
}
