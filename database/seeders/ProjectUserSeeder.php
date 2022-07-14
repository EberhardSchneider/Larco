<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectUserSeeder extends Seeder
{
    function run()
    {
        DB::table('project_user')->insert([
            [ 'user_id' => 1, 'project_id' => 1],
            [ 'user_id' => 2, 'project_id' => 1],
            [ 'user_id' => 3, 'project_id' => 1],
            [ 'user_id' => 4, 'project_id' => 1],
        ]);
    }
}
