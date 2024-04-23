<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        $request->validated();

        $newProject = new Project();

        // poichè tramite le validazioni backend la thumb è già required, salvo la variabile path senza ulteriori controlli
        $path = Storage::disk('public')->put('project_images', $request->thumb);

        $newProject->thumb = $path;

        $newProject->fill($request->all());

        $newProject->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        // poichè tramite le validazioni backend la thumb è già required, salvo la variabile path senza ulteriori controlli
        $path = Storage::disk('public')->put('project_images', $request->thumb);

        $project->thumb = $path;

        $project->update($request->all());

        $project->save();

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
