<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdsService;
use App\Services\CategoryService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( CategoryService $category, AdsService $ads)
    {
        $category=$category->getCategory();
        $ads=$ads->getAds();
        // $category=(new CategoryService())->getCategory();
        // $ads=[AdsService::class, 'getAds'];
        //  dd($category->getCategory());
        return view('front.index', compact('category', 'ads'));
    }
}
