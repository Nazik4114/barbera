<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'tsar',
            'email' => 'vcube.su@gmail.com',
            'password' => Hash::make('rybakvasya')
        ]);
        // \App\Models\User::factory(10)->create();

        $this->call(CompanySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(MasterSeeder::class);
    }
}
