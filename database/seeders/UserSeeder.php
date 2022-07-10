<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Eberhard Schneider',
            'email' => 'tesd@t.2qdfsdw23s',
            'password' => 'sdlfköjdflkgjdflkigj',
            'instrument_id' => 1
        ]);
        $user->save();
        $user = User::create([
            'name' => 'Jürgen Peukert',
            'email' => 'tessd@t.2qdfsdw23s',
            'password' => 'sdlfköjddflkgjdflkigj',
            'instrument_id' => 4
        ]);
        $user->save();
    }
}
