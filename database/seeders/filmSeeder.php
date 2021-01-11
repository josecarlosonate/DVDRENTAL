<?php

namespace Database\Seeders;

use App\Models\film;
use Illuminate\Database\Seeder;

class filmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        film::factory(10)->create();
    }
}
