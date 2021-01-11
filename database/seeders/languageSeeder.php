<?php

namespace Database\Seeders;

use App\Models\language;
use Illuminate\Database\Seeder;

class languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        language::factory(10)->create();
    }
}
