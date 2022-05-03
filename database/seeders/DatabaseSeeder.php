<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Insert data into users table
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'tes@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        // Insert food table data
        DB::table('table_menu')->insert([
            'nama' => 'Nasi Goreng Special',
        ]);

        DB::table('table_menu')->insert([
            'nama' => 'Nasi Goreng Seafood',
        ]);

        DB::table('table_menu')->insert([
            'nama' => 'Nasi Goreng sayur',
        ]);

        DB::table('table_menu')->insert([
            'nama' => 'Es Teh Manis',
        ]);

        DB::table('table_menu')->insert([
            'nama' => 'Kwetiaw',
        ]);

        DB::table('table_menu')->insert([
            'nama' => 'Es Jeruk Dingin',
        ]);

    }
}
