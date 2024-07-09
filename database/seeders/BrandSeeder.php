<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Brand::create([
            'name' => 'Honda',
            'sub_categoy_id' => '1',
        ]);
        Brand::create([
            'name' => 'Yamaha',
            'sub_categoy_id' => '1',
        ]);
        Brand::create([
            'name' => 'Kawasaki',
            'sub_categoy_id' => '1',
        ]);

        Brand::create([
            'name' => 'Suzuki',
            'sub_categoy_id' => '1',
        ]);
        Brand::create([
            'name' => 'Bajaj ',
            'sub_categoy_id' => '1',
        ]);
        
    }
}
