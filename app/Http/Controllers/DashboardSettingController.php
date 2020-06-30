<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function store()
    {
        return view('pages.dashboard-settings');
    }

    public function account()
    {
        return view('pages.dashboard-account');
    }
}
