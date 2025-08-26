<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    public function offers()
    {
        $data['title'] = 'Offer | Balemora Admin';
        $data['offers'] = Offer::all();
        $user = Auth::user();
        return view('backend.offer', $data, compact('user'));
    }
}
