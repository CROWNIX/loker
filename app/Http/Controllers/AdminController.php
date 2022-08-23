<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        if(!auth()->check()){
            return redirect("/admin/login");
        }

        return view("admin.index");
        
    }

    public function login(){
        return view("admin.auth.login");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt($credentials)){
            $user = User::where("email", $request->email)->first();

            if($user->is_admin == 0){
                return back()->with("error", "Login failed");
            }

            $request->session()->regenerateToken();
            return redirect("/admin/dashboard")->with("success", "Anda berhasil Login");
        }

        return back()->with("error", "Login failed");
    }

    public function users(){
        return view("admin.users.index", [
            "users" => User::where("is_admin", 0)->get(),
        ]);
    }
}