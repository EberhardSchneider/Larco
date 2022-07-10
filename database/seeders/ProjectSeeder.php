<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Herbst 2022',
                'program' => "Verdi: Ouvertüra La forza del destino\nStockmeier: Die Andeutung\Beethoven 5",
            ]
        ];
        DB::table('projects')->insert($projects);

        DB::table('project_user')->insert([
            ['user_id' => 1, 'project_id' => 1],
            ['user_id' => 2, 'project_id' => 1],
        ]);
    }
}
