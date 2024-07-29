<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\Ads;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Services\AdsService;
use App\Services\ImageService;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isEmpty;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdsService $adsService)
    {
        //
        $data=$adsService->getAds();
        // print_r($data); die();

        return view('admin.ads.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    // Ads Detail Page 
    public function show(int $id, AdsService $adsService,ImageService $imageService, )
    {
        
       $data= $adsService->getAdsSingle($id);
       $image=$imageService->getSingleAdsImage($id);
       $comment=$adsService->getACommentSingle($id); 
        
    //    print_r($image); die();
        return view('admin.ads.show',compact('data','image','comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
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


}
