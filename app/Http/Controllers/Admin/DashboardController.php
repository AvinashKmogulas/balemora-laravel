<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['title'] = "Dashboard | Balemora Resort Admin";
        $user = Auth::user();
        return view('backend.dashboard', compact('user'), $data);
    }


    // website info
    public function websiteInfo(){
        $data['title'] = "Website Info | Balemora Resort Admin";
        $user = Auth::user();
        return view('backend.website-info', compact('user'), $data);
    }
}
