<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Image::create([

            'name' => 'Micro Loader 2012',
            'link' => 'micro-loader-2012-for-sale-kalutara-1.jpg',
            'ads_id' => 1,
            'status' => 1,

        ]);
        Image::create([

            'name' => 'Micro Loader 2012',
            'link' => 'micro-loader-2012-for-sale-kalutara-2.jpg',
            'ads_id' => 1,
            'status' => 2,

        ]);
        Image::create([

            'name' => 'Suzuki Wagon R Stingray Turbo 2018',
            'link' => 'suzuki-wagon-2.jpeg',
            'ads_id' => 2,
            'status' => 1,

        ]);
        Image::create([

            'name' => 'Suzuki Wagon R Stingray Turbo 2018',
            'link' => 'suzuki-wagon-1.jpeg',
            'ads_id' => 2,
            'status' => 2,

        ]);
        Image::create([

            'name' => 'Luxury House for sale in Horana',
            'link' => 'luxury-house-for-sale-in-horana-for-sale-1.jpeg',
            'ads_id' => 3,
            'status' => 1,

        ]);
        Image::create([

            'name' => 'Luxury House for sale in Horana',
            'link' => 'luxury-house-for-sale-in-horana-for-sale-2.jpeg',
            'ads_id' => 3,
            'status' => 2,

        ]);
    }
}
