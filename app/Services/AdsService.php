<?php 
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Ads;
use App\Models\Comment;
use App\Models\User;
use App\Models\Image;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

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
    public function getAdsSingle(int $id){
        
        $ads = DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->leftJoin('users', 'users.id', '=', 'ads.user_id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname','users.name as uname','users.email')
        ->where('ads.id', '=', $id)->first();

       
        return  $ads;

    }
    public function getACommentSingle(int $id){
        
        // return Comment::where('ads_id',$id)->get();
        return DB::table('comments')
        ->leftJoin('users', 'users.id', '=', 'comments.user_id')
        ->select('users.*', 'comments.comment')
        ->where('comments.ads_id', '=', $id)->get();
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
        // print_r($data); die();   //
        $feactue = ['feature1', 'feature2', 'feature3', 'feature4', 'feature5', 'feature6'];
        foreach ($feactue as $item) {
            if (isset($data[$item])) {
                if ($data[$item] == null) {
                    $data[$item] = 'NA';
                    print_r('2');

                }            
            }
            
            else{

                $data[$item] = 'NA';           
             }
            
            
        }        

        return $data;
    }

    public function getAdsSingleDetail(Array $id){
        $ad = DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
        ->where('ads.id', $id)
        ->first();
        

        print_r( $id+'sdsd'); die();
    }

    public function getComments($id){

        return DB::table('comments')
        ->leftJoin('users', 'users.id', '=', 'comments.user_id')
        ->select(
            'comments.*',
            'users.name',
            DB::raw('SUBSTR(users.name, 1, 1) as avatar')
        )
        ->where('comments.ads_id', $id)
        ->get();

    }

    public function searchAds($query){
        $keyword=$query['keyword'];
        // Simple search
       return Ads::where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->get();

    }

    public function getFirstLetter(string $sentence){
        return strtoupper(substr($sentence, 0, 1));

    }
    public function getAdsByUser($id){
        
        $ads = DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->leftJoin('users', 'users.id', '=', 'ads.user_id')
        ->leftJoin('images', 'images.ads_id', '=', 'ads.id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname','images.link as imageLink')
        ->where('users.id',$id)
        ->where('images.status',1)->get();

        
        return  $ads;

    }
    public function getAdsByUserCount($id){
        $ads = DB::table('ads')
        ->where('user_id', $id)
        ->count();
        return $ads;
    }
    
    public function getCommentByUserCount($id){
        $comments = DB::table('comments')
        ->where('user_id', $id)
        ->count();
        return $comments;
    }

   

}