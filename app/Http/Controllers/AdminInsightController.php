<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminInsightController extends Controller {

    public function index() {
        return view('admin.insights.index', [
            'insights' => Insight::paginate(6)
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
            'first_body' => 'required |min:5',
            'second_body' => 'required |min:5'
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('img');


        Insight::create($attributes);

        return redirect('/admin/insights');
    }

    public function edit(Insight $insight) {
        return view('admin.insights.edit', ['insight' => $insight]);
    }

    public function update(Insight $insight) {
        $attributes = request()->validate([
            'title' => 'required|min:5',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('insights', 'slug')->ignore($insight->id)],
            'first_body' => 'required |min:5',
            'second_body' => 'required |min:5',
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('img');
        }
        $insight->update($attributes);

        return back()->with('success', 'insight Updated Successfully');
    }

    public function destroy(Insight $insight) {

        $insight->delete();

        return back()->with('success', 'insight Deleted Successfully');
    }
}
