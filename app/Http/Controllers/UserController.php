<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');

    }
    public function store(Request $req){
        $formFields= $req->validate([
            'name'=>['required', 'min:3'],
            'email'=>['required', 'email', ValidationRule::unique('users', 'email')],
            'password'=>'required|confirmed|min:6',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create();
        auth()->login($user);
    }
    //
}
