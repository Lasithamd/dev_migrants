<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Ads;
use App\Models\Comment;
use App\Models\User;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class AdminServices
{

    public function getAds()
    {

        $ads = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->leftJoin('images', 'images.ads_id', '=', 'ads.id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname', 'images.link as imageLink')
            ->where('images.status', 1)->get();


        return  $ads;
    }
    public function getAdsSingle(int $id)
    {

        $ads = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->where('ads.id', '=', $id)->first();


        return  $ads;
    }


    public function getSingleAd(int $id)
    {

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
            } else {

                $data[$item] = 'NA';
            }
        }

        return $data;
    }

    public function getAdsSingleDetail(array $id)
    {
        $ad = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->where('ads.id', $id)
            ->first();


        print_r($id + 'sdsd');
        die();
    }

    public function getComments($id)
    {

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

    public function searchAds($query)
    {
        $keyword = $query['keyword'];
        // Simple search
        return Ads::where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('description', 'LIKE', "%{$keyword}%")
            ->get();
    }

    public function getFirstLetter(string $sentence)
    {
        return strtoupper(substr($sentence, 0, 1));
    }
    public function getAdsByUser($id)
    {

        $ads = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->leftJoin('users', 'users.id', '=', 'ads.user_id')
            ->leftJoin('images', 'images.ads_id', '=', 'ads.id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname', 'images.link as imageLink')
            ->where('users.id', $id)
            ->where('images.status', 1)->get();


        return  $ads;
    }
    public function getAdsByUserCount($id)
    {
        $ads = DB::table('ads')
            ->where('user_id', $id)
            ->count();
        return $ads;
    }

    public function getCommentByUserCount($id)
    {
        $comments = DB::table('comments')
            ->where('user_id', $id)
            ->count();
        return $comments;
    }


    public function getAdsCount()
    {

        return Ads::all()->count();
    }

    public function getUserCount()
    {
        return  User::all()->count();
    }
    public function getCommeCount()
    {
        return  Comment::all()->count();
    }
    public function getWeeklyAds()
    {

        return DB::table('ads')
            ->whereRaw('WEEK(created_at) = WEEK(CURDATE())')
            ->get();
    }
    public function weeklyCount()
    {
        return DB::table('ads')
            ->whereRaw('WEEK(created_at) = WEEK(CURDATE())')
            ->count();
    }
    public function getMonthlyAdslyCount()
    {
        return DB::table('ads')
            ->whereRaw('MONTH(created_at) = MONTH(CURDATE())')
            ->whereRaw('YEAR(created_at) = YEAR(CURDATE())')
            ->count();
    }
    public function getMonthlyAds()
    {
        return DB::table('ads')
            ->whereRaw('MONTH(created_at) = MONTH(CURDATE())')
            ->whereRaw('YEAR(created_at) = YEAR(CURDATE())')
            ->get();
    }
    public function getDashboardData()
    {
        $data['adsCount'] = $this->getAdsCount();
        $data['userCount'] = $this->getUserCount();
        $data['commentCount'] = $this->getCommeCount();
        $data['WeeklyAds'] = $this->getWeeklyAds();
        $data['weeklyCount'] = $this->weeklyCount();
        $data['MonthlyAdslyCount'] = $this->getMonthlyAdslyCount();
        $data['MonthlyAds'] = $this->getMonthlyAds();
        $data['WeeklyPresentageData'] = $this->getWeeklyPresentageData();
        $data['MonthlyPresentageData'] = $this->getMonthlyPresentageData();
        
        
        return $data;
    }

    public function getWeeklyPresentageData()
    {
        $currentWeekAds = DB::table('ads')
            ->whereRaw('WEEK(created_at) = WEEK(CURDATE())')
            ->count();

        $previousWeekAds = DB::table('ads')
            ->whereRaw('WEEK(created_at) = WEEK(CURDATE()) - 1')
            ->count();


        if ($previousWeekAds > 0) {
            $percentageDifference = ($currentWeekAds - $previousWeekAds) / $previousWeekAds * 100;
        } else {
            $percentageDifference = 100;
        }
        return $percentageDifference;
    }
    public function getMonthlyPresentageData()
    {
        $currentMonthAds = DB::table('ads')
            ->whereRaw('MONTH(created_at) = MONTH(CURDATE())')
            ->whereRaw('YEAR(created_at) = YEAR(CURDATE())')
            ->count();

        $previousMonthAds = DB::table('ads')
            ->whereRaw('MONTH(created_at) = MONTH(CURDATE()) - 1')
            ->whereRaw('YEAR(created_at) = CASE WHEN MONTH(CURDATE()) = 1 THEN YEAR(CURDATE()) - 1 ELSE YEAR(CURDATE()) END')
            ->count();

        if ($previousMonthAds > 0) {
            $percentageDifference = ($currentMonthAds - $previousMonthAds) / $previousMonthAds * 100;
        } else {
            $percentageDifference = 100;
        }
        return $percentageDifference;
    }
}
