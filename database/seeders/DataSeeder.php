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
//         DB::table('features1')->delete();

// 		$features1 = array(
// 	array('name' => 'Bajaj', 'sub_category_id' => 1),
//     array('name' => 'TVS', 'sub_category_id' => 1),
//     array('name' => 'Hero', 'sub_category_id' => 1),
//     array('name' => 'Honda', 'sub_category_id' => 1),
//     array('name' => 'Yamaha', 'sub_category_id' => 1),
//     array('name' => 'Suzuki', 'sub_category_id' => 1),
//     array('name' => 'Royal Enfield', 'sub_category_id' => 1),
//     array('name' => 'Kawasaki', 'sub_category_id' => 1),
//     array('name' => 'Harley-Davidson', 'sub_category_id' => 1),
//     array('name' => 'KTM', 'sub_category_id' => 1),
//     array('name' => 'Benelli', 'sub_category_id' => 1),
//     array('name' => 'Triumph', 'sub_category_id' => 1),
//     array('name' => 'Ducati', 'sub_category_id' => 1),
//     array('name' => 'Aprilia', 'sub_category_id' => 1),
//     array('name' => 'BMW', 'sub_category_id' => 1),
//     array('name' => 'Abans', 'sub_category_id' => 7),
//     array('name' => 'Singer', 'sub_category_id' => 7),
//     array('name' => 'Softlogic', 'sub_category_id' => 7),
//     array('name' => 'Dialog', 'sub_category_id' => 7),
//     array('name' => 'Eagle', 'sub_category_id' => 7),
//     array('name' => 'Panasonic', 'sub_category_id' => 7),
//     array('name' => 'LG', 'sub_category_id' => 7),
//     array('name' => 'Samsung', 'sub_category_id' => 7),
//     array('name' => 'Sony', 'sub_category_id' => 7),
//     array('name' => 'Bajaj', 'sub_category_id' => 2),
//     array('name' => 'Piaggio', 'sub_category_id' => 2),
//     array('name' => 'TVS', 'sub_category_id' => 2),
//     array('name' => 'Scooty', 'sub_category_id' => 2),
//     array('name' => 'Mahindra', 'sub_category_id' => 2),
//    array('name' => 'Micro', 'sub_category_id' => 34),
//     array('name' => 'Perodua', 'sub_category_id' => 34),
//     array('name' => 'KIA', 'sub_category_id' => 34),
//     array('name' => 'Maruti', 'sub_category_id' => 34),
//     array('name' => 'Tata', 'sub_category_id' => 34),
//     array('name' => 'Jaguar', 'sub_category_id' => 34),
//     array('name' => 'Audi', 'sub_category_id' => 34),
//     array('name' => 'Lamborghini', 'sub_category_id' => 34),
//     array('name' => 'Mercedes-Benz', 'sub_category_id' => 34),
//     array('name' => 'Volvo', 'sub_category_id' => 34),
//     array('name' => 'Toyota', 'sub_category_id' => 34),
//     array('name' => 'Land Rover', 'sub_category_id' => 34),
//     array('name' => 'Chevrolet', 'sub_category_id' => 34),
//     array('name' => 'Ford', 'sub_category_id' => 34),
//     array('name' => 'Nissan', 'sub_category_id' => 34),
//     array('name' => 'Peugeot', 'sub_category_id' => 34),
//     array('name' => 'Renault', 'sub_category_id' => 34),
//     array('name' => 'Subaru', 'sub_category_id' => 34),
//     array('name' => 'Tesla', 'sub_category_id' => 34),
// 	array('name' => 'Abans', 'sub_category_id' => 9),
//     array('name' => 'Singer', 'sub_category_id' => 9),
//     array('name' => 'Damro', 'sub_category_id' => 9),
//     array('name' => 'Softlogic', 'sub_category_id' => 9),
//     array('name' => 'LG', 'sub_category_id' => 9),
//     array('name' => 'Panasonic', 'sub_category_id' => 9),
//     array('name' => 'Samsung', 'sub_category_id' => 9),
//     array('name' => 'Haier', 'sub_category_id' => 9),
//     array('name' => 'Mitsubishi Electric', 'sub_category_id' => 9),
//     array('name' => 'Gree', 'sub_category_id' => 9),
// 	array('name' => 'Sofas', 'sub_category_id' => 22),
//     array('name' => 'Beds', 'sub_category_id' => 22),
//     array('name' => 'Dining Tables', 'sub_category_id' => 22),
//     array('name' => 'Wardrobes', 'sub_category_id' => 22),
//     array('name' => 'Desks', 'sub_category_id' => 22),
//     array('name' => 'Chairs', 'sub_category_id' => 22),
//     array('name' => 'Bookcases', 'sub_category_id' => 22),
//     array('name' => 'Coffee Tables', 'sub_category_id' => 22),
//     array('name' => 'Cabinets', 'sub_category_id' =>22),
//     array('name' => 'TV Stands', 'sub_category_id' => 22),
// 	array('name' => 'Residential Land', 'sub_category_id' => 29),
//     array('name' => 'Commercial Land', 'sub_category_id' => 29),
//     array('name' => 'Agricultural Land', 'sub_category_id' => 29),
//     array('name' => 'Industrial Land', 'sub_category_id' => 29),
//     array('name' => 'Vacant Land', 'sub_category_id' => 29),
//     array('name' => 'Beachfront Land', 'sub_category_id' => 29),
//     array('name' => 'Mountain Land', 'sub_category_id' => 29),
//     array('name' => 'Lakefront Land', 'sub_category_id' => 29),
//     array('name' => 'Forest Land', 'sub_category_id' => 29),
//     array('name' => 'Urban Land', 'sub_category_id' => 29)

					
// 		);
// 		DB::table('features1')->insert($features1);

        DB::table('features2')->delete();

		$features1 = array(
			
		);
		DB::table('features2')->insert($features1);

		DB::table('features3')->delete();

		$features1 = array(
			array('name' => '1880', 'sub_category_id' => 1),
    array('name' => '1881', 'sub_category_id' => 1),
    array('name' => '1882', 'sub_category_id' => 1),
    array('name' => '1883', 'sub_category_id' => 1),
    array('name' => '1884', 'sub_category_id' => 1),
    array('name' => '1885', 'sub_category_id' => 1),
    array('name' => '1886', 'sub_category_id' => 1),
    array('name' => '1887', 'sub_category_id' => 1),
    array('name' => '1888', 'sub_category_id' => 1),
    array('name' => '1889', 'sub_category_id' => 1),
    array('name' => '2000', 'sub_category_id' => 1),
    array('name' => '2001', 'sub_category_id' => 1),
    array('name' => '2002', 'sub_category_id' => 1),
    array('name' => '2003', 'sub_category_id' => 1),
    array('name' => '2004', 'sub_category_id' => 1),
    array('name' => '2005', 'sub_category_id' => 1),
    array('name' => '2006', 'sub_category_id' => 1),
    array('name' => '2007', 'sub_category_id' => 1),
    array('name' => '2008', 'sub_category_id' => 1),
    array('name' => '2009', 'sub_category_id' => 1),
    array('name' => '2010', 'sub_category_id' => 1),
    array('name' => '2011', 'sub_category_id' => 1),
    array('name' => '2012', 'sub_category_id' => 1),
    array('name' => '2013', 'sub_category_id' => 1),
    array('name' => '2014', 'sub_category_id' => 1),
    array('name' => '2015', 'sub_category_id' => 1),
    array('name' => '2016', 'sub_category_id' => 1),
    array('name' => '2017', 'sub_category_id' => 1),
    array('name' => '2018', 'sub_category_id' => 1),
    array('name' => '2019', 'sub_category_id' => 1),
    array('name' => '2020', 'sub_category_id' => 1),
    array('name' => '2021', 'sub_category_id' => 1),
    array('name' => '2022', 'sub_category_id' => 1),
    array('name' => '2023', 'sub_category_id' => 1),
    array('name' => '2024', 'sub_category_id' => 1),
	array('name' => '1880', 'sub_category_id' => 2),
    array('name' => '1881', 'sub_category_id' => 2),
    array('name' => '1882', 'sub_category_id' => 2),
    array('name' => '1883', 'sub_category_id' => 2),
    array('name' => '1884', 'sub_category_id' => 2),
    array('name' => '1885', 'sub_category_id' => 2),
    array('name' => '1886', 'sub_category_id' => 2),
    array('name' => '1887', 'sub_category_id' => 2),
    array('name' => '1888', 'sub_category_id' => 2),
    array('name' => '1889', 'sub_category_id' => 2),
    array('name' => '2000', 'sub_category_id' => 2),
    array('name' => '2001', 'sub_category_id' => 2),
    array('name' => '2002', 'sub_category_id' => 2),
    array('name' => '2003', 'sub_category_id' => 2),
    array('name' => '2004', 'sub_category_id' => 2),
    array('name' => '2005', 'sub_category_id' => 2),
    array('name' => '2006', 'sub_category_id' => 2),
    array('name' => '2007', 'sub_category_id' => 2),
    array('name' => '2008', 'sub_category_id' => 2),
    array('name' => '2009', 'sub_category_id' => 2),
    array('name' => '2010', 'sub_category_id' => 2),
    array('name' => '2011', 'sub_category_id' => 2),
    array('name' => '2012', 'sub_category_id' => 2),
    array('name' => '2013', 'sub_category_id' => 2),
    array('name' => '2014', 'sub_category_id' => 2),
    array('name' => '2015', 'sub_category_id' => 2),
    array('name' => '2016', 'sub_category_id' => 2),
    array('name' => '2017', 'sub_category_id' => 2),
    array('name' => '2018', 'sub_category_id' => 2),
    array('name' => '2019', 'sub_category_id' => 2),
    array('name' => '2020', 'sub_category_id' => 2),
    array('name' => '2021', 'sub_category_id' => 2),
    array('name' => '2022', 'sub_category_id' => 2),
    array('name' => '2023', 'sub_category_id' => 2),
    array('name' => '2024', 'sub_category_id' => 2)
		);
		DB::table('features3')->insert($features1);

    }
}
