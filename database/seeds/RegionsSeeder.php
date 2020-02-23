<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('provinces')->truncate();
        DB::table('regencies')->truncate();

        $sql = database_path('seeds/wilayah.sql');
        $user = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $db = env('DB_DATABASE_TEST');
        $q = sprintf("mysql -u %s -p%s %s < %s", $user, $password, $db, $sql);
        var_dump($q);
        exec($q);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
