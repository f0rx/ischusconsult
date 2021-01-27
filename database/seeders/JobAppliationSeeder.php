<?php

namespace Database\Seeders;

use App\Models\JobAppliation;
use Illuminate\Database\Seeder;

class JobAppliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobAppliation::factory()->count(20)->create();
    }
}
