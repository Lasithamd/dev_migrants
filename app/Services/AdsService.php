<?php 
namespace App\Services;

use Illuminate\Support\Facades\DB;

class   AdsService{

    public function getAds(){
        
        $ads = DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->leftJoin('images', 'images.ads_id', '=', 'ads.id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname','images.link as imageLink')
        ->where('images.status',1)->get();

        return  $ads;

    }

    public function getSingleAd(int $id){

     return DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
        ->where('ads.category_id', '=', $id)->get();
    }
}