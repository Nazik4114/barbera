<?php

namespace Database\Seeders;

use App\Models\Master;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::all();
        Master::factory()->count(5)->hasAttached($services)->create();
    }
}
