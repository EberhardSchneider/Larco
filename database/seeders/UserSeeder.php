<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\User;
use Carbon\Carbon;
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
            'instrument_id' => 1,
            'activated_at' => Carbon::now()
        ]);
        $user->save();
        $user = User::create([
            'name' => 'Jürgen Peukert',
            'email' => 'tessd@t.2qdfsdw23s',
            'password' => 'sdlfköjddflkgjdflkigj',
            'instrument_id' => 4,
            'activated_at' => Carbon::now()
        ]);
        $user->save();
        $user = User::create([
            'name' => 'Ebi ahnungslos',
            'email' => 'eberhard.fritsche@gmx.de',
            'password' => 'sdlfköjddflkgjdflkigj',
            'instrument_id' => 4,
            'activated_at' => null
        ]);
        $user->save();
        $user = User::create([
            'name' => 'Carlos Kleiber',
            'email' => 'test@test.de',
            'password' => '$2y$10$/5iq89QE5Su9mmhsErE4zOl4k1VIBnskhhf14CA8R/efK4x7Z.fay',
            'instrument_id' => 14,
            'activated_at' => Carbon::now(),
            'is_admin' => true
        ]);
        $user->save();
    }
}
