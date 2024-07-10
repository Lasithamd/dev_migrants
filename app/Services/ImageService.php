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

    public function saveImagesProfile(int $id, String $name){
       
        Image::create([
            'ads_id' => $id,
            'name' => 'Ads Images',
            'status' => 1,
            'link' => $name
        ]);
    }
    public function saveImagesGallery(int $id, String $name){
        Image::create([
            'ads_id' => $id,
            'name' => 'Ads Images',
            'status' => 0,
            'link' => $name
        ]);
    }
}