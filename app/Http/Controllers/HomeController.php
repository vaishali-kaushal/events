<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventRegistration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event_registrations = EventRegistration::get();
        // dd($event_registrations);
        return view('home',compact('event_registrations'));
    }

    public function eventView()
    {
        return view('admin.eventview');
    }

    
}
