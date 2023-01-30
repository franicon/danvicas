<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller {

    public function index() {
        return view('admin.services.index', [
            'services' => Service::paginate(6)
        ]);
    }

    public function create() {
        return view('admin.services.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'required',
            'body' => 'required'
        ]);

        $attributes['image'] = Storage::disk('public')->putFile('/public/img', request()->file('image'));

        Service::create($attributes);

        return back()->with('success', 'Service Created successfully');
    }
}
