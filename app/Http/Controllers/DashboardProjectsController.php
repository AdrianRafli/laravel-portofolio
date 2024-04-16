<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

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
            'demo_link' => 'required'
        ]);

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

}
