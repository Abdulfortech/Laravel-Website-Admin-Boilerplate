<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use PDF;

class SponsorsController extends Controller
{
    //
    public function index()
    {
        $sponsors = Sponsor::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.sponsors.index',['sponsors'=> $sponsors]);
    }

    public function add()
    {
        return view('app.sponsors.add');
    }

    public function view(Request $request, $id)
    {
        $sponsor = Sponsor::find($id);

        if(!$sponsor || is_null($sponsor->status))
        {
            return redirect()->route('sponsors')->with('message', 'The sponsor did not exist.Try again');
        }

        return view('app.sponsors.view',['sponsor'=> $sponsor]);
    }

    public function edit(Request $request, $id)
    {
        $sponsor = Sponsor::find($id);

        if(!$sponsor || is_null($sponsor->status))
        {
            return redirect()->route('sponsors')->with('message', 'The sponsor did not exist.Try again');
        }

        return view('app.sponsors.edit', compact('sponsor'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'display' => 'required',
            'picture' => 'required',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';

        if($request->hasFile('picture')){
            $credentials['picture'] = $request->file('picture')->store('projects', 'public');
        }

        $sponsor = sponsor::create($credentials);
        if($sponsor)
        {
            return redirect()->route('sponsors')->with('message', 'You successfully add a sponsor');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, sponsor $sponsor)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'display' => 'required',
            'picture' => 'nullable',
        ]);

        if($request->hasFile('picture')){
            $credentials['picture'] = $request->file('picture')->store('projects', 'public');
        }

        $sponsor->update($credentials);

        if($sponsor)
        {
            return redirect()->route('sponsors')->with('message', 'You successfully update a sponsor');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function delete(Request $request, sponsor $sponsor)
    {
        $sponsor->update([
            'status' => null
        ]);

        if($sponsor)
        {
            return redirect()->route('sponsors')->with('message', 'You successfully delete a sponsor');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function printAll()
    {
        $sponsors = sponsor::whereNotNull('status')->orderBy('id', 'desc')->get();
        $allSponsors = sponsor::whereNotNull('status')->get()->count();
        $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->setPaper('A4', 'landscape')->loadView('app.sponsors.pdfAll', ['sponsors'=> $sponsors, 'allSponsors'=> $allSponsors]);

        return $pdf->download('Kaid-sponsors.pdf');
    }

}
