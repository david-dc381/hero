<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('levels')->truncate();

        $experience = 100;
        for ($i=0; $i < 10; $i++) { 
            $experience = $experience * 2;
            DB::table('levels')->insert([
                'experience' => $experience
            ]);
        }
    }
}
