<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation')->truncate();
        DB::table('reservation')->insert([

            'id'            =>  1,
            'check_in_date' =>  'Alarm clock',
            'type'          =>  '2',

        ]);

    }
}
