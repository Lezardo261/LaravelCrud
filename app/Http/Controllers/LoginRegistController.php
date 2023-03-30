<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRegistController extends Controller
{
    public function Login(){
        return view('Login');
    }
    public function LoginQuery(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('Dashboard');
        }
        return redirect('Login');

    }
    public function Regist(){
        return view('Regist');
    }
    public function RegistQuery(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(68),
        ]);
        return redirect('/Login');
    }
    public function Logout(){
        Auth::logout();
        return redirect('Login');
    }
}
