<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ViewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('view')->truncate();
        DB::table('view')->insert([
            'id'        => 1,
            'name'      => 'Lake View',
            'created_by'=> '1',
            'updated_by'=> '1',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('view')->insert([
            'id'        => 2,
            'name'      => 'Pagoda View',
            'created_by'=> '1',
            'updated_by'=> '1',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('view')->insert([
            'id'        => 3,
            'name'      => 'City View',
            'created_by'=> '1',
            'updated_by'=> '1',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('view')->insert([
            'id'        => 4,
            'name'      => 'Street View',
            'created_by'=> '1',
            'updated_by'=> '1',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
