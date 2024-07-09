<?php 
namespace App\Services;

use App\Models\District;
use App\Models\Province;
use App\Models\City;
use Illuminate\Support\Facades\DB;


class   LocationServices{

    public function getDistric(){
       return District::all();
    }

    public function loadCity(int $id){
        $city = City::where('district_id', $id)->get();
        return response()->json($city);
    }
}