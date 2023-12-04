<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;



class AuthManager extends Controller
{
    // Login Controller
    public function login()
    {
        return view('authentication.login');
    }


    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('viewLandingPage');
        } else {
            return redirect()->route('login')->with('error', 'Login Failed!');
        }
    }
    // End Login Controller

    // Logout Controller
    public function actionlogout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('login');
    }
    // End Logout Controller

    // Register Controller
    public function register()
    {
        return view('authentication.register');
    }


    public function actionregister(Request $request)
    {
        try {
            $validateData = $request->validate([
                'email' => 'required|email:dns|unique:users|max:255',
                'name' => 'required',
                'is_admin' => 'boolean',
                'password' => 'required|min:4|max:255',
            ]);
            $validateData['password'] = Hash::make($validateData['password']);
            User::create($validateData);

            Session::flash('success', 'Register Berhasil');
            return redirect('register');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) {
                Session::flash('error', 'Gagal melakukan register. Email sudah terdaftar.');
            } else {
                Session::flash('error', 'Gagal melakukan register. Terjadi kesalahan.');
            }
            Session::flash('error', $e);

            return redirect('register');
        }
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


// public function actionregister(Request $request)
// {
//     try {
//         $user = User::create([
//             'email' => $request->email,
//             'name' => $request->name,
//             'password' => Hash::make($request->password),
//         ]);

//         Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
//         return redirect('register');
//     } catch (QueryException $e) {
//         $errorCode = $e->errorInfo[1];

//         if ($errorCode == 1062) {
//             Session::flash('error', 'Gagal melakukan register. Email sudah terdaftar.');
//         } else {
//             Session::flash('error', 'Gagal melakukan register. Terjadi kesalahan.');
//         }

//         return redirect('register');
//     }
// }

// public function actionregister(Request $request)
    // {
        // try {
        // $request->validate([
            // 'email' => 'required|max:255',
            // 'name' => 'required',
            // 'is_admin' => 'required|boolean',
            // 'email' => 'required|email:dns|unique:users',
            // 'password' => 'required:4|max:255',
        // ]);

        // $validateData['password'] = Hash::make($validateData['password']);

        // User::create($validateData);

        // Session::flash('success', 'Register Berhasil');
        // return redirect('register');
        // dd($request);
        // } catch (QueryException $e) {
        // $errorCode = $e->errorInfo[1];

        // if ($errorCode == 1062) {
        //     Session::flash('error', 'Gagal melakukan register. Email sudah terdaftar.');
        // } else {
        //     Session::flash('error', 'Gagal melakukan register. Terjadi kesalahan.');
        // }
        // Session::flash('error', $e);

        // return redirect('register');
        // }
    // }