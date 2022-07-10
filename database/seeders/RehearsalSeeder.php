<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RehearsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rehearsals = [
            [
                'date_begin' => Carbon::create(2022, 7, 14, 19, 30),
                'date_end' => Carbon::create(2022, 7, 14, 22, 00),
                'location_id' => 1,
                'program' => "Stockmeier\nBeethoven I/II"
            ],
            [
                'date_begin' => Carbon::create(2022, 8, 9, 19, 30),
                'date_end' => Carbon::create(2022, 8, 9, 22, 00),
                'location_id' => 1,
                'program' => "WTF"
            ]
        ];

        DB::table('rehearsals')->insert($rehearsals);
    }
}
