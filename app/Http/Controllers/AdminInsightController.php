<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminInsightController extends Controller {

    public function index() {
        return view('admin.insights.index', [
            'insights' => Insight::paginate(50)
        ]);
    }

    public function create() {
        return view('admin.insights.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required|min:5',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('insights', 'slug')],
            'body' => 'required |min:5'
        ]);

        $attributes['thumbnail'] = Storage::disk('public')->putFile('/public/img', request()->file('thumbnail'));

        Insight::create($attributes);

        return redirect('/insights');
    }
}
