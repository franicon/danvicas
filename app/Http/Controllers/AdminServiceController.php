<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller {

    public function index() {
        return view('admin.services.index', [
            'services' => Service::paginate(6)
        ]);
    }
}
