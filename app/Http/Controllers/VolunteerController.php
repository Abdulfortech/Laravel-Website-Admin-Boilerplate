<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    //
    public function index()
    {
        $volunteers = Volunteer::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.volunteers.index',['volunteers'=> $volunteers]);
    }

    public function add()
    {
        return view('app.volunteers.add');
    }

    public function view(Request $request, Volunteer $volunteer)
    {
        return view('app.volunteers.view',['volunteer'=> $volunteer]);
    }

    public function edit(Request $request, Volunteer $volunteer)
    {
        return view('app.volunteers.edit', compact('volunteer'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'email' => 'required',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';

        $volunteer = Volunteer::create($credentials);
        if($volunteer)
        {
            return redirect()->route('volunteers')->with('message', 'You successfully add a volunteer');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, Volunteer $volunteer)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'email' => 'required',
        ]);

        $volunteer->update($credentials);

        if($volunteer)
        {
            return redirect()->route('volunteers')->with('message', 'You successfully update a volunteer');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function delete(Request $request, Volunteer $volunteer)
    {
        $volunteer->delete();
        if($volunteer)
        {
            return redirect()->route('volunteers')->with('message', 'You successfully delete a volunteer');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function printAll()
    {
        $Volunteers = Volunteer::whereNotNull('status')->orderBy('id', 'desc')->get();
        $allVolunteers = Volunteer::whereNotNull('status')->get()->count();
        $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->setPaper('A4', 'landscape')->loadView('app.Volunteers.pdfAll', ['Volunteers'=> $Volunteers, 'allVolunteers'=> $allVolunteers]);

        return $pdf->download('AUCO-Volunteers.pdf');
    }


}
