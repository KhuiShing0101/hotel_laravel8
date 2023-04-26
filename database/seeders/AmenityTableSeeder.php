<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class AmenityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->truncate();
        DB::table('amenities')->insert([
            'id'            =>  1,
            'name'          =>  'Alarm clock',
            'type'          =>  '2',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  2,
            'name'          =>  '43” LED TV',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  3,
            'name'          =>  'Wooden clothes brush',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  4,
            'name'          =>  'Flashlight',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  5,
            'name'          =>  'ron and ironing board',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  6,
            'name'          =>  'Shoe horn',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  7,
            'name'          =>  'Tele Phone',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  8,
            'name'          =>  'Flash Lighting',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);

        DB::table('amenities')->insert([
            'id'            =>  9,
            'name'          =>  'Music Box ',
            'type'          =>  '1',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'created_by'    =>  '2',
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'updated_by'    =>  '2',

        ]);
    }
}
