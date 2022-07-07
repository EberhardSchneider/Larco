<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instruments = collect([
            'Violine 1',
            'Violine 2',
            'Viola',
            'Violoncello',
            'Kontrabass',
            'Flöte',
            'Oboe',
            'Klarinette',
            'Fagott',
            'Horn',
            'Trompete',
            'Posaune',
            'Tuba',
            'Schlagzeug',
            'Pauke',
            'Harfe',
            'Klavier',
            'Dirigent'
        ]);

        DB::table('instruments')->insert($instruments->map(function ($i) {
            return ['name' => $i];
        })->toArray());
    }
}
