<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TagTranslation::factory(30)->create();
    }
}
