<?php 
namespace App\Services;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
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
    public function getGalleryImage($id){
        return Image::where('ads_id', $id)->where('status', 2)->get();
    }
    public function getFeaturdyImage(){
        $image = Image::where('status',1)->get();
        return $image;

    }
}