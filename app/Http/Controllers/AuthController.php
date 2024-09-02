<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.signin');
    }

    public function showRegistrationForm()
    {
        return view('auth.signup');
    }

    public function signin(Request $request)
    {
        // Validation logic here
        if (Auth::attempt($request->only('email', 'password'))) {
            if(auth()->user()->status == 'Active')
            {
                $userLog = UserLogs::create([
                    'userID' => auth()->user()->id,
                    'username' => $request->email,
                    'IPAddress' => $_SERVER['REMOTE_ADDR'],
                    'status' => 'Signed-In',
                ]);
                
                return redirect()->route('dashboard')->with('message', 'Signed In successsfully');
                
            }
            else
            {
                return redirect()->route('showSignin')->with('message', 'You are not active');
            }
        }
            $userLog = UserLogs::create([
                'userID' => 0,
                'username' => $request->email,
                'IPAddress' => $_SERVER['REMOTE_ADDR'],
                'status' => 'Failed',
            ]);
        // Handle failed login
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function signup(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'firstName' => ['required', 'min:4'],
            'lastName' => ['required', 'min:4'],
            'userType' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
        $credentials['status'] = 'Active';
        // $credentials['businessID'] = 1;
        $credentials['password'] = bcrypt($credentials['password']);
        // dd($credentials);
        // Create a new user
        $user = User::create($credentials);

        // Log in the user
        Auth::login($user);
        $userLog = UserLogs::create([
            'userID' => auth()->user()->id,
            'username' => $request->username,
            'IPAddress' => $_SERVER['REMOTE_ADDR'],
            'status' => 'Signed-In',
        ]);

        // // Redirect to the user dashboard
        return redirect()->route('dashboard')->with('message', 'You Sign-In successfully.');
    }


    public function logout()
    {
        $userLog = UserLogs::create([
            'userID' => auth()->user()->id,
            'username' =>  auth()->user()->username,
            'IPAddress' => $_SERVER['REMOTE_ADDR'],
            'status' => 'Signed-Out',
        ]);
        Auth::logout();
        return redirect()->route('signin'); // Redirect to the login page after logout
    }

}
