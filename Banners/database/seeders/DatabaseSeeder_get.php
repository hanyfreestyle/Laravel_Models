<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call(BannerCategorySeeder::class);
        $this->call(BannerCategoryTranslationSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BannerTranslationSeeder::class);


    }
}
