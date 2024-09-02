<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Album;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Sponsor;
use App\Models\Volunteer;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // $transactions = Transaction::whereNotNull('status')->orderBy('id', 'desc')->get();
        // $allTransactions = Transaction::whereNotNull('status')->get()->count();
        // $todayTransactions = Transaction::whereNotNull('status')->whereDate('created_at', Carbon::today())->count();
        // Count orders for the current month
        // $monthTransactions = Transaction::whereNotNull('status')
        //     ->whereYear('created_at', $currentYear)
        //     ->whereMonth('created_at', $currentMonth)
        //     ->count();
            $allAdmins = User::whereNotNull('status')->get()->count();
            $allVolunteers = Volunteer::whereNotNull('status')->get()->count();
            // $allClients = Client::whereNotNull('status')->get()->count();
            $allProjects = Project::whereNotNull('status')->get()->count();
            // $allDonations = Donation::whereNotNull('status')->get()->count();
            $allSponsors = Sponsor::whereNotNull('status')->get()->count();
            $allTestimonials = Testimonial::whereNotNull('status')->get()->count();
            $allGallery = Gallery::whereNotNull('status')->get()->count();
            $allAlbums = Album::whereNotNull('status')->get()->count();
            return view('app.dashboard', compact('allAdmins', 'allVolunteers', 'allProjects', 'allSponsors', 'allTestimonials', 'allGallery', 'allAlbums'));
        
        
    }
}
