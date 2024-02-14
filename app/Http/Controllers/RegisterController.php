<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerUserReqeust;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('regist.register');
    }

    public function store(registerUserReqeust $req)
    {   
        $user = User::create([
            'name'      => $req->name,
            'email'     => $req->email,
            'password'  => Hash::make($req->password)
        ]);

        event(new Registered($user));

        return view('regist.complete', compact('user'));
    }
}
