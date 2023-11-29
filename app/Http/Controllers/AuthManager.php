<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthManager extends Controller
{
    // Login Controller
    public function login()
    {
        if (Auth::check()) {
            return route('/');
        } else {

            return view('authentication.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];


        if (Auth::Attempt($data)) {
            $user = Auth::user();
            return redirect()->route('viewLandingPage');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    // End Login Controller

    // Logout Controller
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    // End Logout Controller

    // Register Controller
    public function register()
    {
        return view('authentication.register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('register');
    }
    // End Register Controller

    // Validate Email Controller
    public function validateemail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        $userExists = User::where('email', $email)->exists();

        if ($userExists) {
            $request->session()->put('reset_email', $email);
            return view('authentication.resetpassword');
        } else {
            Session::flash('message', 'Email tidak terdaftar.');
            return view('authentication.forgotpassword');
        }
    }

    // End Validate Email Controller

    // Forgot Password Controller
    public function forgot()
    {
        return view('authentication.forgotpassword');
    }

    // End Forgot Password Controller

    // Forgot Password Controller
    public function resetpassword()
    {
        return view('authentication.resetpassword');
    }
    // End Forgot Password Controller
}
