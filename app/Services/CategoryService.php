<?php 
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
class   CategoryService{

    public function getCategory(){

       return Category::where('status', '=',1)->get();

    }
    public function categoryName(int $id)
    {
        $category = Category::where('id', $id)->first()->name;
        return $category;
    }
    public function categoryCount()
    {
        $ads = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->select('ads.category_id', DB::raw('count(*) as category_count'), 'categories.id', 'categories.name', 'categories.image')
            ->groupBy('ads.category_id', 'categories.name', 'categories.image', 'categories.id')
            ->get();

        return $ads;
    }
}