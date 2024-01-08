<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EntityEventTypeSeeder::class);
        $this->call(EntityTypesTableSeeder::class);
        $this->call(PresetTypeTableSeeder::class);
        //$this->call(RpgSystemsTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(VisibilitiesTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(PostLayoutTableSeeder::class);
        $this->call(FeatureCategorySeeder::class);
    }
}
