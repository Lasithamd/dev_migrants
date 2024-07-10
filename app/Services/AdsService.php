<?php 
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Ads;

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
    public function slugGenerator(String $title, int $id, int $city_id)
    {

        $slug = Str::slug($title, "-") . $id . $city_id;
        $slugcheck = Ads::where('slug', '=', $slug)->get();
        if ($slugcheck->count() > 0) {
            return false;
        } else {
            return $slug;
        }
    }
    public function checkFeature(array $data)
    {
        $feactue = ['feature1', 'feature2', 'feature3', 'feature4', 'feature5', 'feature6'];

        foreach ($feactue as $item) {

            if ($data[$item] == null) {
                $data[$item] = 'NA';
            }
        }
        return $data;
    }
}