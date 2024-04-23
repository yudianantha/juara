<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function home()
    {
        return view('company-profile.home');
    }

    public function about()
    {
        return view('company-profile.about');
    }

    public function login()
    {
        return view('auth.login');
    }
}
