<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create( [
            'id'=>1,
            'name'=>'Cars & Vehicles',
            'image'=>'1',
            'created_at'=>'2024-02-04 06:23:00',
            'updated_at'=>'2024-02-04 06:23:00',
            'status'=>1
            ] );
                        
            Category::create( [
            'id'=>2,
            'name'=>'Electronics & Gedgets',
            'image'=>'2',
            'created_at'=>'2024-02-04 06:23:00',
            'updated_at'=>'2024-02-04 06:23:00',
            'status'=>1
            ] );
                        
            Category::create( [
            'id'=>3,
            'name'=>'Fshion & Beauty',
            'image'=>'5',
            'created_at'=>'2024-01-22 06:22:20',
            'updated_at'=>'2024-01-22 06:22:20',
            'status'=>0
            ] );
                        
            Category::create( [
            'id'=>4,
            'name'=>'Property',
            'image'=>'3',
            'created_at'=>'2024-02-04 06:23:00',
            'updated_at'=>'2024-02-04 06:23:00',
            'status'=>1
            ] );
                        
            Category::create( [
            'id'=>5,
            'name'=>'Sports & Responsive',
            'image'=>'4',
            'created_at'=>'2024-02-04 06:23:00',
            'updated_at'=>'2024-02-04 06:23:00',
            'status'=>0
            ] );
                        
            Category::create( [
            'id'=>6,
            'name'=>'Pets & Animals',
            'image'=>'6',
            'created_at'=>'2024-02-04 08:20:54',
            'updated_at'=>'2024-02-04 08:20:54',
            'status'=>1
            ] );
                        
            Category::create( [
            'id'=>7,
            'name'=>'Home Appliances',
            'image'=>'9',
            'created_at'=>'2024-02-04 08:21:15',
            'updated_at'=>'2024-02-04 08:21:15',
            'status'=>1
            ] );
                        
            Category::create( [
            'id'=>8,
            'name'=>'Music & Arts',
            'image'=>'11',
            'created_at'=>'2024-02-04 08:21:15',
            'updated_at'=>'2024-02-04 08:21:15',
            'status'=>0
            ] );
                        
            Category::create( [
            'id'=>9,
            'name'=>'Industrial Machinery',
            'image'=>'',
            'created_at'=>'2024-04-26 15:52:13',
            'updated_at'=>'2024-04-26 15:52:13',
            'status'=>0
            ] );
    }
}
