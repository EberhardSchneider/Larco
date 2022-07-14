<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RehearsalUserSeeder extends Seeder
{
    function run()
    {
        DB::table('rehearsal_user')->insert([
            [ 'user_id' => 1, 'rehearsal_id' => 1],
            [ 'user_id' => 1, 'rehearsal_id' => 4],
            [ 'user_id' => 1, 'rehearsal_id' => 5],

        ]);
    }
}
