<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::whereNotNull('status')->orderBy('id', 'desc')->get();
        $allProjects = Project::whereNotNull('status')->get()->count();
        $activeProjects = Project::where('status','Active')->get()->count();
        $completedProjects = Project::where('status','Completed')->get()->count();
        return view('app.projects.index',compact('projects', 'allProjects', 'activeProjects', 'completedProjects'));
    }

    public function add()
    {
        return view('app.projects.add');
    }

    public function view(Request $request, Project $project)
    {
        return view('app.projects.view',['project'=> $project]);
    }

    public function edit(Request $request, Project $project)
    {
        return view('app.projects.edit', compact('project'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'title' => 'required',
            'target' => 'required',
            'target_label' => 'required',
            'progress' => 'required',
            'category' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required',
            'body' => 'required',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';

        if($request->hasFile('image')){
            $credentials['image'] = $request->file('image')->store('projects', 'public');
        }

        $project = project::create($credentials);
        if($project)
        {
            return redirect()->route('projects')->with('message', 'You successfully add a project');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, Project $project)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'title' => 'required',
            'target' => 'required',
            'target_label' => 'required',
            'progress' => 'required',
            'category' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'nullable',
            'body' => 'required',
        ]);

        if(isset($request->image)){
            $credentials['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($credentials);

        if($project)
        {
            return redirect()->route('projects')->with('message', 'You successfully update a project');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }


    public function delete(Request $request, Project $project)
    {
        $project->update([
            "status"=> null
        ]);
        if($project)
        {
            return redirect()->route('projects')->with('message', 'You successfully delete a project');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function deactivate(Request $request, Project $project)
    {
        $project->update([
            "status"=> "Inactive"
        ]);

        if($project)
        {
            return redirect()->route('projects.view',[$project->id])->with('message', 'You successfully deactivate a project');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function complete(Request $request, Project $project)
    {
        $project->update([
            "status"=> "Completed"
        ]);

        if($project)
        {
            return redirect()->route('projects.view',[$project->id])->with('message', 'You successfully deactivate a project');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function activate(Request $request, Project $project)
    {
        $project->update([
            "status"=> "Active"
        ]);

        if($project)
        {
            return redirect()->route('projects.view',[$project->id])->with('message', 'You successfully activate a project');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }


    public function printAll()
    {
        $projects = Project::whereNotNull('status')->orderBy('id', 'desc')->get();
        $allprojects = Project::whereNotNull('status')->get()->count();
        $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->setPaper('A4', 'landscape')->loadView('app.projects.pdfAll', ['projects'=> $projects, 'allprojects'=> $allprojects]);

        return $pdf->download('AUCO-projects.pdf');
    }
}
