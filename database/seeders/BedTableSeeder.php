<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class BedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bed')->truncate();
        DB::table('bed')->insert([

            'id'            =>  1,
            'name'          =>  'Double / Twin',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('bed')->insert([

            'id'            =>  2,
            'name'          =>  'Double',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('bed')->insert([

            'id'            =>  3,
            'name'          =>  'Single Bed',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('bed')->insert([

            'id'            =>  4,
            'name'          =>  'Extra Bed',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('bed')->insert([

            'id'            =>  5,
            'name'          =>  'Triple Bed',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '1',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '1',

        ]);

        DB::table('bed')->insert([

            'id'            =>  6,
            'name'          =>  'Triple Bed',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '1',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '1',

        ]);

        DB::table('bed')->insert([

            'id'            =>  7,
            'name'          =>  'Gold Bed ',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '1',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '1',

        ]);

        DB::table('bed')->insert([

            'id'            =>  8,
            'name'          =>  'Model 1 Bed ',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '1',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '1',

        ]);

        DB::table('bed')->insert([

            'id'            =>  9,
            'name'          =>  'Double ',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '1',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '1',

        ]);
    }
}
