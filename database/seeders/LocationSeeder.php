<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'name' => 'Gymnasium am Mosbacher Berg (GMB)',
                'address' => 'Mosbacher Str. 57-59 • 65187 Wiesbaden'
            ],
            [
                'name' => 'Finthen, Waldorfschule',
                'address' => 'Merkurweg 2 • 55126 Mainz'
            ],
            [
                'name' => 'Lutherkirche',
                'address' => 'Sartoriusstraße 16 • 65187 Wiesbaden'
            ],
            [
                'name' => 'Ev. Pfarramt, Sonnenberg',
                'address' => 'Kreuzbergstraße 9 • 65193 Wiesbaden'
            ]

        ];

        DB::table('locations')->insert($locations);
    }
}
