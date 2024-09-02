<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $admins = User::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.admins.index',['admins'=> $admins]);
    }

    public function showAddAdmin()
    {
        return view('app.admins.add');
    }

    public function showAdmin(Request $request, User $user)
    {
        return view('app.admins.view',['admin'=> $user]);
    }

    public function showEditAdmin(Request $request, User $user)
    {
        return view('app.admins.edit', compact('user'));
    }

    public function addAdmin(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'userType' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $credentials['addedBy'] = auth()->user()->id;
        $credentials['businessID'] = auth()->user()->business->id;
        $credentials['status'] = 'Active';
        $credentials['password'] = bcrypt($credentials['password']);
        // Create a new admin
        $admin = User::create($credentials);
        if($admin)
        {
            return redirect()->route('admins')->with('message', 'You successfully add an admin');
        }
        // dd($credentials);
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function editAdmin(Request $request, User $user)
    {
         // Validation logic here (you can use Laravel validation)
         $credentials = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'userType' => 'required',
            'email' => 'required',
            'password' => 'nullable|confirmed|min:8',
        ]);

        if(isset($request->password)){
            $credentials['password'] = bcrypt($credentials['password']);
        }else{
            $credentials['password'] = $user->password;
        }

        $user->update($credentials);
        if($user)
        {
            return redirect()->route('admin.showView',[$user->id])->with('message', 'You successfully update an admin');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function deleteAdmin(Request $request, User $user)
    {
        $user->update([
            "status"=> null
        ]);
        if($user)
        {
            return redirect()->route('admins')->with('message', 'You successfully delete an admin');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function deactivateAdmin(Request $request, User $user)
    {
        $user->update([
            "status"=> "Inactive"
        ]);

        if($user)
        {
            return redirect()->route('admin.showView',[$user->id])->with('message', 'You successfully deactivate an admin');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function activateAdmin(Request $request, User $user)
    {
        $user->update([
            "status"=> "Active"
        ]);

        if($user)
        {
            return redirect()->route('admin.showView',[$user->id])->with('message', 'You successfully activate an admin');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

}
