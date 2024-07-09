<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mod;

class ModSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mod::create([
            'name' => 'CB500X ',
            'brand_id' => '1',
        ]);
        Mod::create([
            'name' => 'CBR600RR ',
            'brand_id' => '1',
        ]);
        Mod::create([
            'name' => 'CRF450R ',
            'brand_id' => '1',
        ]);
        Mod::create([
            'name' => 'YZF-R1 ',
            'brand_id' => '2',
        ]);
        Mod::create([
            'name' => 'MT-09 ',
            'brand_id' => '2',
        ]);
        Mod::create([
            'name' => 'Ninja ZX-10R',
            'brand_id' => '3',
        ]);
        Mod::create([
            'name' => 'Versys 650',
            'brand_id' => '3',
        ]);
        Mod::create([
            'name' => 'GSX-R1000',
            'brand_id' => '4',
        ]);
        Mod::create([
            'name' => 'V-Strom 650',
            'brand_id' => '4',
        ]);
        Mod::create([
            'name' => 'Boulevard M109R',
            'brand_id' => '4',
        ]);
        Mod::create([
            'name' => ' CT100',
            'brand_id' => '5',
        ]);
        Mod::create([
            'name' => 'Pulsar NS200',
            'brand_id' => '5',
        ]);
        Mod::create([
            'name' => 'Platina 100',
            'brand_id' => '5',
        ]);
        Mod::create([
            'name' => 'Dominar 400',
            'brand_id' => '5',
        ]);
    }
}
