<?php

namespace Database\Seeders;


use App\Models\actor;
use Illuminate\Database\Seeder;


class actorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        actor::factory(10)->create();
    }
}
