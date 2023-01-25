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
            session()->regenerate();
            return redirect('/admin')->with('success', 'Welcome Back');
        }

        return back()->withErrors(['email' => ' Your provided credentials could not be verified']);
    }

    public function destroy () {
        auth()->logout();

        return redirect('/')->with('success', 'You have Log out');
    }
}
