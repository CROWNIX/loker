<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $user = [
            "email" => $request->emailLogin,
            "password" => $request->passwordLogin
        ];

        if(Auth::attempt($user)){
            $request->session()->regenerateToken();
            return redirect()->intended("/");
        }

        return back()->with("error_login", "Login failed");
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
}