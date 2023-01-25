<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {

    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required|min:7',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('success', 'Your Account has been created');

        return redirect('/');
    }
}
