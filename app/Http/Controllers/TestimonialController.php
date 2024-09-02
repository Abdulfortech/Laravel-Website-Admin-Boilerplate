<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //

    public function index()
    {
        $testimonials = Testimonial::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.testimonials.index',['testimonials'=> $testimonials]);
    }

    public function add()
    {
        return view('app.testimonials.add');
    }

    public function view(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        if(!$testimonial || is_null($testimonial->status))
        {
            return redirect()->route('testimonials')->with('message', 'The testimonial did not exist.Try again');
        }

        return view('app.testimonials.view',['testimonial'=> $testimonial]);
    }

    public function edit(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        if(!$testimonial || is_null($testimonial->status))
        {
            return redirect()->route('testimonials')->with('message', 'The testimonial did not exist.Try again');
        }

        return view('app.testimonials.edit', compact('testimonial'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'picture' => 'required',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';

        if($request->hasFile('picture')){
            $credentials['picture'] = $request->file('picture')->store('projects', 'public');
        }

        $testimonial = Testimonial::create($credentials);
        if($testimonial)
        {
            return redirect()->route('testimonials')->with('message', 'You successfully add a testimonial');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'picture' => 'nullable',
        ]);

        if($request->hasFile('picture')){
            $credentials['picture'] = $request->file('picture')->store('projects', 'public');
        }

        $testimonial->update($credentials);

        if($testimonial)
        {
            return redirect()->route('testimonials')->with('message', 'You successfully update a testimonial');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function delete(Request $request, Testimonial $testimonial)
    {
        $testimonial->update([
            'status' => null
        ]);

        if($testimonial)
        {
            return redirect()->route('testimonials')->with('message', 'You successfully delete a testimonial');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function printAll()
    {
        $testimonials = Testimonial::whereNotNull('status')->orderBy('id', 'desc')->get();
        $allTestimonials = Testimonial::whereNotNull('status')->get()->count();
        $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->setPaper('A4', 'landscape')->loadView('app.testimonials.pdfAll', ['testimonials'=> $testimonials, 'alltestimonials'=> $alltestimonials]);

        return $pdf->download('Kaid-testimonials.pdf');
    }

}
