<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function __invoke (Request $req) {

        $mailData = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message
        ];

        Mail::to( 'danvicasng@gmail.com')->cc('info@danvicas.com')->send(new ContactMail($mailData));
        return redirect('/')->with('success', 'Email sent Successfuly');
    }
}
