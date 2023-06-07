<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            'active' => ''
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); //untuk menghindari session fixation (menggunakan session yang sama)

            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed');
    }
}
