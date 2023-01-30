<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller {

    public function index() {
        return view('admin.projects.index', [
            'projects' => Project::paginate(6)
        ]);
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function edit(Project $project) {
        return view('admin.projects.edit', ['project' => $project]);
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'required',
            'body' => 'required'
        ]);

        $attributes['thumbnail'] = Storage::disk('public')->putFile('/public/img', request()->file('image'));

        Service::create($attributes);

        return redirect('/admin/projects')->with('success', 'Service Created successfully');
    }

    public function update(Project $project) {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);

        if (isset($attributes['image'])) {
            $attributes['image'] = Storage::disk('public')->putFile('/public/img', request()->file('image'));
        }
        $project->update($attributes);

        return redirect('/admin/projects')->with('success', 'Service Updated Successfully');
    }

    public function destroy(Project $project) {
        $project->delete();

        return back()->with('success', 'Service Deleted successfully');
    }

}
