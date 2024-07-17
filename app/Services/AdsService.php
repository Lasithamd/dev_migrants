<?php 
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Ads;
use App\Models\Comment;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

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
    public function sendAIRequest(Request $data)
    {
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer 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',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'temperature' => 0.7,
                    'messages' => [['role' => 'user', 'content' => $data->message]],
                ],
            ]);
        }
        catch(Exception $e){
            
        }
    }

    public function getComments($id){
        return Comment::where('ads_id',$id)->get();
    }

    public function searchAds($query){
        $keyword=$query['keyword'];
        // Simple search
       return Ads::where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->get();

    }


}