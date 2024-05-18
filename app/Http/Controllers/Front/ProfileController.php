<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('front.pages.profile.profile');
    }
}
