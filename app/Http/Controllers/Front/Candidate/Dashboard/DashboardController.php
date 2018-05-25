<?php

namespace ReclutaTI\Http\Controllers\Front\Candidate\Dashboard;

use Illuminate\Http\Request;
use ReclutaTI\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('front.candidate.dashboard');
    }
}
