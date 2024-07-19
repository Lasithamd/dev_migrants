<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CitySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(ProvinceSeeder::class);
           $this->call(BrandSeeder::class);
           $this->call(ModSeeder::class);
           $this->call(AdsSeeder::class);
           $this->call(ImageSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CountriesSeeder::class);
    

    }
}
