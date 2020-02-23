<?php

use Illuminate\Database\Seeder;

class Api extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('api')->insert([
            'id_admin' => 1,
            'api_secret' => Str::random(30),
            'api_key' => Str::random(30),
        ]);
    }
}
