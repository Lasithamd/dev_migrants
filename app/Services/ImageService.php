<?php 
namespace App\Services;

use App\Models\Image;
use Illuminate\Support\Facades\DB;


class   ImageService{

    public function getAdsImages(){
        
        return  DB::table('images')
        ->leftJoin('ads', 'ads.id', '=', 'images.ads_id')
        ->select('images.*')->get();

    }
}