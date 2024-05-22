<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $page_title       = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('dashboard.index', compact('page_title', 'page_description'));
    }
}
