<?php

namespace App\Http\Controllers\Front;

use App\Models\Tag;
use App\Models\Video;
use App\Models\Product;
use App\Models\Service;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        
            $services = $this->getServices();
            $products = $this->getProducts();
            $tags     = $this->getPobularCarProblems();
            $videos   = $this->getVideos();
        return view('front.pages.home.index', compact(['services','products','tags','videos']));
    }
    protected function getServices()
    {
        return Service::latest()->take(4)->get();
    }
    protected function getProducts()
    {
        return Product::latest()->take(4)->get();
    }
    protected function getPobularCarProblems()
    {
        return Tag::latest()->take(4)->get();
    }
    protected function getVideos()
    {
        return Video::latest()->take(4)->get();
    }
}
