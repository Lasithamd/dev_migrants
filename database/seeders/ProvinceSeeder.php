<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Province::create( [
            'id'=>1,
            'name_en'=>'Western',
            'name_si'=>'බස්නාහිර',
            'name_ta'=>'மேல்',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>2,
            'name_en'=>'Central',
            'name_si'=>'මධ්‍යම',
            'name_ta'=>'மத்திய',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>3,
            'name_en'=>'Southern',
            'name_si'=>'දකුණු',
            'name_ta'=>'தென்',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>4,
            'name_en'=>'North Western',
            'name_si'=>'වයඹ',
            'name_ta'=>'வட மேல்',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>5,
            'name_en'=>'Sabaragamuwa',
            'name_si'=>'සබරගමුව',
            'name_ta'=>'சபரகமுவ',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>6,
            'name_en'=>'Eastern',
            'name_si'=>'නැගෙනහිර',
            'name_ta'=>'கிழக்கு',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>7,
            'name_en'=>'Uva',
            'name_si'=>'ඌව',
            'name_ta'=>'ஊவா',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>8,
            'name_en'=>'North Central',
            'name_si'=>'උතුරු මැද',
            'name_ta'=>'வட மத்திய',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
            
            
                        
            Province::create( [
            'id'=>9,
            'name_en'=>'Northern',
            'name_si'=>'උතුරු',
            'name_ta'=>'வட',
            'created_at'=>'2024-02-10 03:57:47',
            'updated_at'=>'2024-02-10 03:57:47'
            ] );
    }
}
