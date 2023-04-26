<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->truncate();
        DB::table('room')->insert([
            'id'                        => 1,
            'name'                      => 'Deluxe Room',
            'type'                      => '2',
            'occupancy'                 => '3',
            'bed_id'                    => '1',
            'size'                      => '36',
            'view_id'                   => '1',
            'description'               => 'LOTTE HOTEL YANGON sophisticated and contemporary Deluxe Rooms are located from 3rd to 10th floor and are the best options for the budget trip.',
            'detail'                    => 'Extra bed is available for $50 (including VAT and service charge) per person without breakfast',
            'price_per_day'             => '50000',
            'extra_bed_price_per_day'   => '20000',
            'thumbnail'                 =>  '',
            'created_by'                => '1',
            'updated_by'                => '1',
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
        ]);

        DB::table('room')->insert([
            'id'                        => 2,
            'name'                      => 'Premier Lake Room',
            'type'                      => '2',
            'occupancy'                 => '3',
            'bed_id'                    => '1',
            'size'                      => '36',
            'view_id'                   => '3',
            'description'               => 'LOTTE HOTEL YANGON sophisticated and contemporary Deluxe Rooms are located from 3rd to 10th floor and are the best options for the budget trip.',
            'detail'                    => 'Extra bed is available for $50 (including VAT and service charge) per person without breakfast',
            'price_per_day'             => '50000',
            'extra_bed_price_per_day'   => '20000',
            'thumbnail'                 =>  '',
            'created_by'                => '1',
            'updated_by'                => '1',
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
        ]);

        DB::table('room')->insert([
            'id'                        => 3,
            'name'                      => 'Club Floor Junior Suite Room',
            'type'                      => '3',
            'occupancy'                 => '3',
            'bed_id'                    => '2',
            'size'                      => '36',
            'view_id'                   => '2',
            'description'               => 'Our two Club Floor Junior Suite Rooms are located on LOTTE HOTEL YANGON’s highest levels (from 11th to 13th floor), offering the finest vantage point from which to take in the splendor of Inya Lake and the city of Yangon beyond. Each suite has a floor space of 56.3m²,
                                            including a spacious and well equipped living area.
                                            Planned to provide premium levels of hospitality, our Club Floor rooms provide a range of specialized business client services, including a Lake view lounge bar and computer suite',
            'detail'                    => 'Extra bed is available for $50 (including VAT and service charge) per person without breakfast',
            'price_per_day'             => '50000',
            'extra_bed_price_per_day'   => '20000',
            'thumbnail'                 =>  '',
            'created_by'                => '1',
            'updated_by'                => '1',
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
        ]);

        DB::table('room')->insert([
            'id'                        => 4,
            'name'                      => 'Club Floor Junior Suite Room',
            'type'                      => '3',
            'occupancy'                 => '3',
            'bed_id'                    => '2',
            'size'                      => '36',
            'view_id'                   => '2',
            'description'               => 'Our two Club Floor Junior Suite Rooms are located on LOTTE HOTEL YANGON’s highest levels (from 11th to 13th floor), offering the finest vantage point from which to take in the splendor of Inya Lake and the city of Yangon beyond. Each suite has a floor space of 56.3m²,
                                            including a spacious and well equipped living area.
                                            Planned to provide premium levels of hospitality, our Club Floor rooms provide a range of specialized business client services, including a Lake view lounge bar and computer suite',
            'detail'                    => 'Extra bed is available for $50 (including VAT and service charge) per person without breakfast',
            'price_per_day'             => '50000',
            'extra_bed_price_per_day'   => '20000',
            'thumbnail'                 =>  '',
            'created_by'                => '1',
            'updated_by'                => '1',
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
        ]);

        DB::table('room')->insert([
            'id'                        => 5,
            'name'                      => 'Presidential Suite Room',
            'type'                      => '3',
            'occupancy'                 => '5',
            'bed_id'                    => '5',
            'size'                      => '56',
            'view_id'                   => '4',
            'description'               => 'he Presidential Suite Room is a beautifully appointed, expansive VIP suite located on the 11th floor',
            'detail'                    => 'Extra bed is available for $50 (including VAT and service charge) per person without breakfast',
            'price_per_day'             => '80000',
            'extra_bed_price_per_day'   => '20000',
            'thumbnail'                 =>  '',
            'created_by'                => '1',
            'updated_by'                => '1',
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
        ]);
    }
}
