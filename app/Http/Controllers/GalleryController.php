<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $albums = Gallery::select('projectID', DB::raw('count(*) as total'))
                        ->groupBy('projectID')
                        ->whereNotNull('status')
                        ->get();
        $allGallery = Gallery::whereNotNull('status')->get()->count();
        $activeGallery = Gallery::where('status','Active')->get()->count();
        $gallery = Gallery::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.gallery.index', compact('gallery', 'albums', 'allGallery', 'activeGallery'));
    }

    public function add()
    {
        $projects = Project::whereNotNull('status')->get();
        return view('app.gallery.add', ['projects'=> $projects]);
    }

    public function view(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        if(!$gallery || is_null($gallery->status))
        {
            return redirect()->route('gallery')->with('message', 'The gallery did not exist.Try again');
        }

        return view('app.gallery.view',['gallery'=> $gallery]);
    }

    public function edit(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        if(!$gallery || is_null($gallery->status))
        {
            return redirect()->route('gallery')->with('message', 'The gallery did not exist.Try again');
        }
        $projects = Project::whereNotNull('status')->get();
        return view('app.gallery.edit', compact('gallery', 'projects'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'project' => 'required',
            'alt' => 'required',
            'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';


        $imagePaths = [];

        if($request->hasfile('pictures')) {
            foreach($request->file('pictures') as $picture) {
                $path = $picture->store('gallery', 'public');
                $picturePaths[] = $path;

                // Save each picture path to the database
                $gallery = new Gallery();
                $gallery->userID = auth()->user()->id;
                $gallery->projectID = $request->project;
                $gallery->alt = $request->alt;
                $gallery->picture = $path;
                $gallery->status = 'Active';
                $gallery->save();
            }
            return redirect()->route('gallery')->with('message', 'You successfully add a gallery');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, gallery $gallery)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'project' => 'nullable',
            'alt' => 'required',
            'pictures' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('pictures')){
            $pictures = $request->file('pictures')->store('gallery', 'public');
        }
        // dd($credentials);
        $gallery->update([
            "projectID" => $request->project,
            "alt" => $request->alt,
            "picture" => $pictures
        ]);

        // dd($gallery);

        if($gallery)
        {
            return redirect()->route('gallery')->with('message', 'You successfully update a gallery');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function delete(Request $request, gallery $gallery)
    {
        $gallery->update([
            'status' => null
        ]);

        if($gallery)
        {
            return redirect()->route('gallery')->with('message', 'You successfully delete a gallery');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

}
