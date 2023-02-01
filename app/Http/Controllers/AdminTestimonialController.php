<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTestimonialController extends Controller {
    public function index() {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::paginate(6)
        ]);
    }

    public function create() {
        return view('admin.testimonials.create');
    }

    public function edit(Testimonial $testimonial) {
        return view('admin.testimonials.edit', ['testimonial' => $testimonial]);
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'body' => 'required'
        ]);
        $attributes['image'] = request()->file('image')->store('img');

        Testimonial::create($attributes);

        return redirect('/admin/testimonials')->with('success', 'Testimonial Created successfully');
    }

    public function update(Testimonial $testimonial) {
        $attributes = request()->validate([
            'name' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);

        if (isset($attributes['image'])) {
            $attributes['image'] = request()->file('image')->store('img');
        }
        $testimonial->update($attributes);

        return redirect('/admin/testimonials')->with('success', 'Testimonial Updated Successfully');
    }

    public function destroy(Testimonial $testimonial) {
        $testimonial->delete();

        return back()->with('success', 'Testimonial Deleted successfully');
    }
}
