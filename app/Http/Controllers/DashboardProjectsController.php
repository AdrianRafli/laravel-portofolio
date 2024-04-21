<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Project::all();
        return view('dashboard.projects.index', [
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:projects',
            'description' => 'required',
            'tech_stack' => 'required|max:255',
            'github_link' => 'required',
            'demo_link' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('project-images');
        }

        Project::create($validateData);

        return redirect('dashboard/projects')->with('success', 'New Project has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('dashboard.projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', [
            'project' => $project,
            'projects' => Project::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'tech_stack' => 'required|max:255',
            'github_link' => 'required',
            'demo_link' => 'required',
            'image' => 'image|file|max:1024'
        ];

        
        if ($request->slug != $project->slug) {
            $rules['slug'] = 'required|unique:projects';
        }
        
        $validateData = $request->validate($rules);
        
        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('project-images');
        }

        Project::where('id', $project->id)
                ->update($validateData);
        
        return redirect('dashboard/projects')->with('success', 'Project has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if($project->image) {
            Storage::delete($project->image);
        }

        Project::destroy($project->id);
        return redirect('dashboard/projects')->with('success', 'Project has been deleted!');
    }

}
