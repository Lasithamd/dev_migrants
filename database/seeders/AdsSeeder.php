<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ads;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ads::create([

            'name' => 'Micro Loader 2012',
            'description' => 'For sale: Micro Loader 717 in excellent condition. Battery at 100%, only 2 weeks old. Includes canopy (not registered). Second owner, with original meter.',
            'price' => 975000,
            'city_id' => 7,
            'category_id' => 1,
            'sub_category_id' => 3,
            'feature1' => 'Other Brand',
            'feature2' => 'Other Model',
            'feature3' => 'Manual',
            'feature4' => '2012',
            'feature5' => '74000',
            'feature6' => '1',
            'condition' => 1,
            'user_id' => 1,
            'slug' => 'micro-loader-2012-for-sale-kalutara'
        ]);
        //
        Ads::create([

            'name' => 'Suzuki Wagon R Stingray Turbo 2018',
            'description' => 'DUAL AIR BAG, CRUISE CONTROL, TURBO, PADDLE SHIFT GEAR, DULA MULTIFUNTION, DVD REVERS CAMERA',
            'price' => 6950000,
            'city_id' => 7,
            'category_id' => 1,
            'sub_category_id' => 3,
            'feature1' => 'Suzuki',
            'feature2' => 'Wagon R Stingray',
            'feature3' => 'Automatic',
            'feature4' => '2012',
            'feature5' => '77000',
            'feature6' => '650',
            'condition' => 1,
            'user_id' => 1,
            'slug' => 'suzuki-wagon-r-stingray-turbo-2018-for-sale-colombo'
        ]);

        Ads::create([

            'name' => 'Luxury House for sale in Horana',
            'description' => 'වසර 27ක දේපල වෙලදාමේ දැවන්ත මෙන්ම විශ්වාසන්ත නාමය Prime Lands වෙතින්, හොරන වව්ලුගල ',
            'price' => 18500000,
            'city_id' => 7,
            'category_id' => 4,
            'sub_category_id' => 30,
            'feature1' => '10.0 perches',
            'feature2' => '1,536.0 sqft',
            'feature3' => 'Automatic',
            'feature4' => 'N/A',
            'feature5' => 'N/A',
            'feature6' => 'N/A',
            'condition' => 1,
            'user_id' => 1,
            'slug' => 'luxury-house-for-sale-in-horana-for-sale-kalutara'
        ]);
    }
}
