<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function home()
    {
        return view('dashboard-user.home');
    }
}
