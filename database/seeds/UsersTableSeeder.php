<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 100; $i++) {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'gambar_profil' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => bcrypt('password'),
            'lokasi' => Str::random(100),
            'longitude' => rand(0,100),
            'latitude' => rand(0, 100),
            'kabupaten_id'=>1,
        ]);
        }
    }
}
