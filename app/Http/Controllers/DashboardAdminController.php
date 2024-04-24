<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function home()
    {
        return view('dashboard-admin.home');
    }
}
