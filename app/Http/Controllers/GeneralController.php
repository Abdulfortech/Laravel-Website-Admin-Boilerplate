<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Impact;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Sponsor;
use App\Models\Volunteer;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function index()
    {
        $impact = Impact::whereNotNull('status')->orderBy('id', 'desc')->first();
        $testimonials = Testimonial::whereNotNull('status')->orderBy('id', 'desc')->limit(4)->get();
        $blogs = Blog::whereNotNull('status')->orderBy('id', 'desc')->limit(3)->get();
        $sponsors = Sponsor::whereNotNull('status')->where('display', 1)->orderBy('id', 'desc')->limit(5)->get();
        $gallery = Gallery::whereNotNull('status')->orderBy('id', 'desc')->limit(3)->get();
        $projects = Project::whereNotNull('status')->orderBy('id', 'desc')->limit(3)->get();
        return view('main.index', compact('impact', 'testimonials', 'blogs', 'sponsors', 'gallery', 'projects'));
    }

    public function gallery()
    {
        $gallery = Gallery::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('main.gallery', compact('gallery'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('main.testimonials', compact('testimonials'));
    }

    
    public function projects()
    {
        $projects = Project::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('main.projects', compact('projects'));
    }

    
    public function blogs()
    {
        $blogs = Blog::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('main.blogs', compact('blogs'));
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function volunteer(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
        ]);

        $credentials['status'] = 'Active';

        $volunteer = Volunteer::create($credentials);
        return redirect()->back()->with('message', 'Your request has been sent');
    }
}
