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
    public function run() {
        //  \App\Models\User::factory()->create([
        //      'name' => 'Joey',
        //      'is_admin' => 1,
        //      'email' => 'jclustre@gmail.com',
        //      'password' => bcrypt('jocolus7'),
        //  ]);

        //  \App\Models\User::factory(10)->create();
         $this->call(RolesAndPermissionsSeeder::class);

    }
}
