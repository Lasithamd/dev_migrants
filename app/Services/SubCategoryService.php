<?php 
namespace App\Services;

use App\Models\SubCategory;

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

}