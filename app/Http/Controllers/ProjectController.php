<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.index');
    }

    public function viewproject(project $project)
    {
       $datas= $project::all();
    //    dd($datas);
        return view('view_projects.viewproject',compact('datas'));
    }

    public function retourvue ()
    {
        return view('create_project.post_project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validez les données du formulaire
            $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'deadline' => 'required|date_format:d/m/Y',
            'freelancer_type' => 'required|string|max:255',
            'freelancer_level' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'budget_type' => 'required|string|max:255',
            'budget_from' => 'nullable|integer',
            'budget_to' => 'nullable|integer',
            'fixed_price' => 'nullable|integer',
            'attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'languages' => 'nullable|string|max:255',
            'language_fluency' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    }

    public function createproject(Request $request)
    {
        $deadline = \DateTime::createFromFormat('d/m/Y', $request->deadline)->format('Y-m-d');
        // Créez un nouveau projet avec les données du formulaire
        $project = new Project();
        $project->title = $request->title;
        $project->category = $request->category;
        $project->duration = $request->duration;
        $project->deadline = $deadline;
        $project->freelancer_type = $request->freelancer_type;
        $project->freelancer_level = $request->freelancer_level;
        $project->tags = $request->tags;
        $project->skills = $request->skills;
        $project->budget_type = $request->budget_type;
        $project->budget_from = $request->budget_from;
        $project->budget_to = $request->budget_to;
        $project->fixed_price = $request->fixed_price;
        $project->languages = $request->languages;
        $project->language_fluency = $request->language_fluency;
        $project->description = $request->description;
        
        // Enregistrez le projet
        $project->save();

        // Redirigez l'utilisateur vers une autre page ou rechargez la page actuelle
        // en fonction de vos besoins
        return redirect()->route('viewproject')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $as)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'deadline' => 'required|date_format:d/m/Y',
            'freelancer_type' => 'required|string|max:255',
            'freelancer_level' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'budget_type' => 'required|string|max:255',
            'budget_from' => 'nullable|integer',
            'budget_to' => 'nullable|integer',
            'fixed_price' => 'nullable|integer',
            'attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'languages' => 'nullable|string|max:255',
            'language_fluency' => 'required|string|max:255',
            'description' => 'nullable|string',


        ]);
        $deadline = \DateTime::createFromFormat('d/m/Y', $request->deadline)->format('Y-m-d');
        $element=project::find($as);
        $element->update($request->all());

        return view('create_project.post_project');

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $as)
    {
        // return redirect()->route('createproject');
        $element=project::find($as);
        return view('create_project.post_project',compact('element'));
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
