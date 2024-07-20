<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->delete();

		$countries = array(
			array('sub_category_id' => '34',
             'feature1' => 'Brand', 
             'feature2' => 'Model', 
             'feature3' => 'Year of Manufacture', 
              'feature4' => 'Transmission', 
              'feature5' => 'Fuel type',
             'feature6' => 'Mileage'),
             array('sub_category_id' => '1',
             'feature1' => 'Brand', 
             'feature2' => 'Model', 
             'feature3' => 'Year of Manufacture', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'Mileage'),
             array('sub_category_id' => '2',
             'feature1' => 'Brand', 
             'feature2' => 'Model', 
             'feature3' => 'Year of Manufacture', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'Mileage'),
             array('sub_category_id' => '4',
             'feature1' => 'Brand', 
             'feature2' => 'Model', 
             'feature3' => 'Year of Manufacture', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'Mileage'),
             array('sub_category_id' => '7',
             'feature1' => 'Brand', 
             'feature2' => 'Item type', 
             'feature3' => 'Screen Size', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'N/A'),
             array('sub_category_id' => '9',
             'feature1' => 'Brand', 
             'feature2' => 'Item type', 
             'feature3' => 'Screen Size', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'N/A'),
             array('sub_category_id' => '30',
             'feature1' => 'Land size', 
             'feature2' => 'House size', 
             'feature3' => 'Bedrooms', 
              'feature4' => 'Bathrooms', 
              'feature5' => 'N/A',
             'feature6' => 'N/A'),
             array('sub_category_id' => '35',
             'feature1' => 'Breed', 
             'feature2' => 'Size', 
             'feature3' => 'N/A', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'N/A'),
             array('sub_category_id' => '36',
             'feature1' => 'Breed', 
             'feature2' => 'Size', 
             'feature3' => 'N/A', 
              'feature4' => 'N/A', 
              'feature5' => 'N/A',
             'feature6' => 'N/A'),


		);

		DB::table('features')->insert($countries);
	}
        //
    
}