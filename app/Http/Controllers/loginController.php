<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class loginController extends Controller
{
    public function index(){
        return view('login.login',[
           'title' => 'LOGIN' 
        ]);
    }

    public function login(request $request){
        $validate = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect('/login')->withErrors(['errorLogin'=>'Pass/user salah']);
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function regist(){
        return view('login.register',[
            'title' => 'login'
        ]);
    }

    public function register(request $request){
        $validate = $request->validate([
            'username' => ['required','unique:users'],
            'password' => ['required', 'confirmed']
        ]);

        User::create($validate);
        return Redirect('/login')->with('succesMSG','Horrreyy');
    }
}
