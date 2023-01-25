<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function create () {
        return view('login.create');
    }

    public function store() {
        $attributes= request()-> validate([
           'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/admin')->with('Success', 'Welcome Back');
        }

        return back()->withErrors(['email' => ' Your provided credentials could not be verified']);
    }

    public function destroy () {
        auth()->logout();

        return redirect('/')->with('Success', 'You have Log out');
    }
}
