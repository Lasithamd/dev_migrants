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
    public function show(Ads $ads, AdsService $adsService, ImageService $img ,$id)
    {
        // $ad = $ads::findOrFail($id);
        $ad=$adsService->getAdsSingle($id);
        
        $adsData = $adsService->getAds();;
       
        $image= $img->getGalleryImage($id);
        $featured= $img->getFeaturdyImage();

    $comment=$adsService->getComments($id);

        return view('front.ads.details', compact('ad', 'image', 'adsData','featured', 'comment'));
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
    

    public function search(Request $request, AdsService $adsService,CategoryService $category, ImageService $image){
        $text = 'List';    
        $query = $request->all();
        $categories=$category->categoryCount();
        $image = $image->getAdsImages();
        $adsData=$adsService->searchAds($query);
        return view('front.ads-list', compact('adsData', 'categories','image',));
    }   


}
