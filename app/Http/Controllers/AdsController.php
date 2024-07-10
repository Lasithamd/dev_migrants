<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Http\Requests\StoreAdsRequest;
use App\Http\Requests\UpdateAdsRequest;
use App\Services\AdsService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\SubCategoryService;
use App\Services\LocationServices;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdsRequest  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdsRequest $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }
    public function register(CategoryService $categories, SubCategoryService $subcategories, LocationServices $location)
    {
       
        $categories = $categories->getCategory();;
        $subcategories = $subcategories->getOrderSubCat();
        $districts = $location->getDistric();
        return view('front.register.index', compact('categories', 'subcategories', 'districts'));
    }

    public function loadCategories(int $id, AdsService $ads, CategoryService $category, ImageService $image)
    {
        $categoryName =$category->categoryName($id);
        $text = 'single';       
        $categories=$category->categoryCount();
        $adsData=$ads->getSingleAd($id);
       
        $image = $image->getAdsImages();
        return view('front.ads-categories', compact('adsData', 'image', 'categories', 'text', 'categoryName'));
    }
    public function registerNext(Request $request, CategoryService $categories, LocationServices $location, SubCategoryService $subcategories)
    {
        $data = $request->all();


        $location=$location->getDistricDetails($data['city']);
        $subcategories =$subcategories->findSubCat($data['sub_category_id']);
        $categories = $categories->findCategory($subcategories['category_id']);
        return view('front.register.second', compact('categories', 'subcategories', 'location'));
    }
}
