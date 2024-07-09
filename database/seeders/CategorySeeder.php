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
            'name'=>'Cars & Vehicles',
            'image'=>'1',
            'status'=>1
            ] );
                        
            Category::create( [
            'name'=>'Electronics & Gedgets',
            'image'=>'2',
            'status'=>1
            ] );
                        
            Category::create( [
            'name'=>'Fshion & Beauty',
            'image'=>'5',
            'created_at'=>'2024-01-22 06:22:20',
            'updated_at'=>'2024-01-22 06:22:20',
            'status'=>0
            ] );
                        
            Category::create( [
            'name'=>'Property',
            'image'=>'3',
            'status'=>1
            ] );
                        
            Category::create( [
            'name'=>'Sports & Responsive',
            'image'=>'4',
            'status'=>0
            ] );
                        
            Category::create( [
            'name'=>'Pets & Animals',
            'image'=>'6',
            
            'status'=>1
            ] );
                        
            Category::create( [
            'name'=>'Home Appliances',
            'image'=>'9',
            
            'status'=>1
            ] );
                        
            Category::create( [
            'name'=>'Music & Arts',
            'image'=>'11',
            
            'status'=>0
            ] );
                        
            Category::create( [
            'name'=>'Industrial Machinery',
            'image'=>'',
             'status'=>0
            ] );
    }
}
