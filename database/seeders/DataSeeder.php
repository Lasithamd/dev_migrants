<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('features1')->delete();

		$features1 = array(
			array('name' => 'Honda', 'sub_category_id' => 1),
			array('name' => 'Yamaha', 'sub_category_id' => 1),
			array('name' => 'Kawasaki', 'sub_category_id' => 1),
			array('name' => 'Suzuki', 'sub_category_id' => 1),
			array('name' => 'Bajaj ', 'sub_category_id' => 1),
			array('name' => 'Samsung ', 'sub_category_id' => 7),
			array('name' => 'LG ', 'sub_category_id' => 7),
			array('name' => 'Sony ', 'sub_category_id' => 7),
			array('name' => 'TCL ', 'sub_category_id' => 7),

			
		);
		DB::table('features1')->insert($features1);

        DB::table('features2')->delete();

		$features1 = array(
			array('name' => 'CB500X ', 'feat_id' => 1,'sub_category_id' =>1),
			array('name' => 'CB500X ', 'feat_id' => 1,'sub_category_id' =>1),
			array('name' => 'CBR600RR ', 'feat_id' => 1, 'sub_category_id' =>1),
			array('name' => 'CRF450R ', 'feat_id' => 1,'sub_category_id' =>1),
			array('name' => 'YZF-R1 ', 'feat_id' => 2,'sub_category_id' =>1),
			array('name' => 'MT-09  ', 'feat_id' => 2,'sub_category_id' =>1),
			array('name' => 'Ninja ZX-10R ', 'feat_id' => 3,'sub_category_id' =>1),
			array('name' => 'GSX-R1000 ', 'feat_id' => 4,'sub_category_id' =>1),
			array('name' => 'SonV-Strom 650y ', 'feat_id' => 4,'sub_category_id' =>1),
			array('name' => 'Boulevard M109 ', 'feat_id' => 4,'sub_category_id' =>1),

			
		);
		DB::table('features2')->insert($features1);

    }
}
