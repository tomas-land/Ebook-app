<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tomas Landa',
            'email' => 'tomaslanda1989@gmail.com',
            'password' => Hash::make('123456789'),
        ]);


        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);


    }
}
