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

    public function edit(Service $service) {
        return view('admin.services.edit', ['service' => $service]);
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'required',
            'body' => 'required'
        ]);

        $attributes['image'] = Storage::disk('public')->putFile('/public/img', request()->file('image'));

        Service::create($attributes);

        return redirect('/admin/services')->with('success', 'Service Created successfully');
    }

    public function update(Service $service) {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);

        if (isset($attributes['image'])) {
            $attributes['image'] = Storage::disk('public')->putFile('/public/img', request()->file('image'));
        }
        $service->update($attributes);

        return redirect('/admin/services')->with('success', 'Service Updated Successfully');
    }

    public function destroy(Service $service) {
        $service->delete();

        return back()->with('success', 'Service Deleted successfully');
    }
}
