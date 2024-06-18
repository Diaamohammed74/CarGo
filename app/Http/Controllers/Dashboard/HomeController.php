<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $page_title       = 'Dashboard';
        $page_description = 'Some description for the page';
        $counts           = $this->getCounts();
        return view('dashboard.index', compact(['page_title', 'page_description','counts']));
    }
    public function getCounts()
    {
        $counts['mechanicals'] = User::mechanical()->active()->count();
        $counts['customers']   = User::customer()->active()->count();
        $counts['admins']      = User::admin()->active()->count();
        return $counts;
    }
}
