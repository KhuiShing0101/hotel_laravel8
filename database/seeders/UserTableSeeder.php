<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'id'        => 1,
            'name'      => 'admin',
            'email'     => 'admin@email.com',
            'password'  =>  bcrypt('password'),
            'created_at'=>  date('Y-m-d H:i:s'),
            'updated_at'=>  date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id'        => 2,
            'name'      => 'user',
            'email'     => 'user@email.com',
            'password'  =>  bcrypt('password'),
            'created_at'=>  date('Y-m-d H:i:s'),
            'updated_at'=>  date('Y-m-d H:i:s'),
        ]);
    }
}
