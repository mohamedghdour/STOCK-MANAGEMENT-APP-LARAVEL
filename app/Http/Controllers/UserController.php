<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(){
        return view('admin.user');
    } 

    public function update(UserRequest $request){
        $userinfo=$request->validated();
        $userinfo['password']=Hash::make($request->password);
        $user=User::find($request->id);
        $user->fill($userinfo)->save();
        return to_route('user.show')->with('success','User a ete modifier a avec success');
    }
}
