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
            [ 'user_id' => 1, 'rehearsal_id' => 1, 'status_id' => 2],
            [ 'user_id' => 1, 'rehearsal_id' => 2, 'status_id' => 2],
            [ 'user_id' => 1, 'rehearsal_id' => 3, 'status_id' => 2],
            [ 'user_id' => 1, 'rehearsal_id' => 4, 'status_id' => 0],
            [ 'user_id' => 1, 'rehearsal_id' => 5, 'status_id' => 1],
            [ 'user_id' => 1, 'rehearsal_id' => 6, 'status_id' => 1],

            [ 'user_id' => 2, 'rehearsal_id' => 1, 'status_id' => 2],
            [ 'user_id' => 2, 'rehearsal_id' => 2, 'status_id' => 2],
            [ 'user_id' => 2, 'rehearsal_id' => 3, 'status_id' => 1],
            [ 'user_id' => 2, 'rehearsal_id' => 4, 'status_id' => 0],
            [ 'user_id' => 2, 'rehearsal_id' => 5, 'status_id' => 2],

            [ 'user_id' => 3, 'rehearsal_id' => 1, 'status_id' => 2],
            [ 'user_id' => 3, 'rehearsal_id' => 2, 'status_id' => 2],
            [ 'user_id' => 3, 'rehearsal_id' => 3, 'status_id' => 1],
            [ 'user_id' => 3, 'rehearsal_id' => 4, 'status_id' => 0],
            [ 'user_id' => 3, 'rehearsal_id' => 5, 'status_id' => 2],

            [ 'user_id' => 4, 'rehearsal_id' => 1, 'status_id' => 2],
            [ 'user_id' => 4, 'rehearsal_id' => 2, 'status_id' => 2],
            [ 'user_id' => 4, 'rehearsal_id' => 3, 'status_id' => 1],
            [ 'user_id' => 4, 'rehearsal_id' => 4, 'status_id' => 0],
            [ 'user_id' => 4, 'rehearsal_id' => 5, 'status_id' => 2],
        ]);
    }
}
