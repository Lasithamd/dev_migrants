<?php 
namespace App\Services;

use App\Models\SubCategory;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;

class   SubCategoryService{

    public function getSubCatName(int $id)
    {
        return SubCategory::find($id)->first()->name;
      
    }
    public function loadSubCategories(int $id)
    {
        return SubCategory::where('category_id', '=', $id)->get();
    }
    public function getOrderSubCat(){
        return SubCategory::where('status', '=', '1')->orderBy('category_id')->get();
    }
    public function findSubCat(int $id){
        return SubCategory::find($id);
    }
    public function getFeaturs(int $id){
        return DB::table('features')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()
        ->first();
         
    }
    public function getFeatursData(int $id){
        $arrayData=[];
        $arrayData['features1']= DB::table('features1')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();
        $arrayData['features2']= DB::table('features2')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();
        $arrayData['features3']= DB::table('features3')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();
        $arrayData['features4']= DB::table('features4')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();
        $arrayData['features5']= DB::table('features5')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();
        $arrayData['features6']= DB::table('features6')
        ->select('*')
        ->where('sub_category_id', '=', $id)
        ->get()->all();

        return $arrayData;
    }
}