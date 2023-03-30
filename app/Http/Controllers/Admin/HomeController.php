<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Trainee;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('Admin.pages.admin.dashboard');
    }

    public function index()
    {

        $totalAllUser = User::count();
        $totalUser = User::where('role', 'user')->count();
        $totalAdmin = User::where('role', 'admin')->count();
        $totalServices = Service::count();
        $totalContact = Contact::count();
        $totalTrainee = Trainee::count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalReservation = Reservation::count();
        $todayReservation = Reservation::whereDate('created_at', $todayDate)->count();
        $thisMonthReservation = Reservation::whereMonth('created_at', $thisMonth)->count();
        $thisYearReservation = Reservation::whereYear('created_at', $thisYear)->count();

        // dd($totalAllUser);

        return view('Admin.pages.admin.dashboard', ['totalUser' => $totalUser, 'totalAllUser' => $totalAllUser, 'totalAdmin' => $totalAdmin, 'totalServices' => $totalServices, 'totalContact' => $totalContact, 'totalTrainee' => $totalTrainee, 'totalReservation' => $totalReservation, 'todayReservation' => $todayReservation, 'thisMonthReservation' => $thisMonthReservation, 'thisYearReservation' => $thisYearReservation]);

    }

    public function charts()
    {

    }
}
