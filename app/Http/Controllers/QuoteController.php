<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller {

    public function __invoke (Request $req) {

        $data = [
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'number' => $req->number,
            'project_title' => $req->project_title,
            'about_company' => $req->about_company,
            'about_project' => $req->about_project
        ];

        Mail::to('info@danvicas.com')->send(new QuoteMail);
        return redirect('/home')->with('success', 'Email sent Successfuly');
    }
}
