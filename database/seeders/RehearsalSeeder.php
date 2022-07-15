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
                'full_day' => false,
                'location_id' => 1,
                'project_id' => 1,
                'program' => "Stockmeier\nBeethoven I/II"
            ],
            [
                'date_begin' => Carbon::create(2022, 9, 8, 19, 30),
                'date_end' => Carbon::create(2022, 9, 8, 22, 00),
                'full_day' => false,
                'location_id' => 1,
                'project_id' => 1,
                'program' => "Stockmeier\nVerdi (Streicher)"
            ],
            [
                'date_begin' => Carbon::create(2022, 9, 15, 19, 30),
                'full_day' => false,
                'date_end' => Carbon::create(2022, 9, 15, 22, 00),
                'location_id' => 1,
                'project_id' => 1,
                'program' => "Verdi\nBeethoven III/IV (Tutti)"
            ],
            [
                'date_begin' => Carbon::create(2022, 9, 17, 10, 00),
                'date_end' => Carbon::create(2022, 9, 17, 17, 00),
                'full_day' => true,
                'location_id' => 1,
                'project_id' => 1,
                'program' => "WTF"
            ],
            [
                'date_begin' => Carbon::create(2022, 9, 18, 10, 00),
                'date_end' => Carbon::create(2022, 9, 18, 17, 00),
                'full_day' => true,
                'location_id' => 1,
                'project_id' => 1,
                'program' => "WTF"
            ],
            [
                'date_begin' => Carbon::create(2022, 9, 22, 19, 30),
                'date_end' => Carbon::create(2022, 9, 22, 22, 00),
                'full_day' => false,
                'location_id' => 1,
                'project_id' => 1,
                'program' => "WTF"
            ]
        ];

        DB::table('rehearsals')->insert($rehearsals);
    }
}
