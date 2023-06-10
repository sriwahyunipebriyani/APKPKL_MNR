<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function authenticating(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            // cek apakah user status active
            if (Auth::user()->status != 'active') {
                // Auth::logout();
                // $request->session()->invalidate();
                // $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'your account is not active yet. please contact admin!');
                return redirect('/login');
            }

            // dd(Auth::user());
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('profile');
            }

            // return redirect()->intended('dashboard');
            // dd(Auth::user());
        }
        // apakah login valide ?
        Session::flash('status', 'failed');
        Session::flash('message', 'login invalid');
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function registerProses(Request $request)
    {

        $validated = $request->validate([
            'username' => 'required|max:191',
            'password' => 'required|max:191',
            'phone' => 'max:191',

        ]);

        $reques->password = Hash::make($request->password);
        // dd($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register success. Wait admin for approval ');
        return redirect('register');
    }

}
