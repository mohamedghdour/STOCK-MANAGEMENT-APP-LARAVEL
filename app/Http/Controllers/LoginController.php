<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $request=session()->regenerate();
            return to_route('dashboard.show')->with('success',"Vous avez connecter avec success");
        }
        else{
            return back()->with('danger','Email ou mot de pass incorrect')->onlyInput('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login.show')->with('success','Vous avez deconnecter avec success');
    }
}
