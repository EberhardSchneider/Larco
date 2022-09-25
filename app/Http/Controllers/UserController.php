<?php

namespace App\Http\Controllers;

use App\Models\Rehearsal;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    function index(User $user) {
        $users = $user->all()->map(function ($u) {
            return [
                'name' => $u->name,
                'instrument' => $u->instrument->name,
                'rehearsals' => $u->rehearsals,
                'activated' => $u->activated !== null
            ];
        });
        return Inertia::render('Users', [
            'users' => $users
        ]);
    }

    function store(Request $request) {
        $userData = $request->all();
        $user = User::find($userData['id']);
        $rehearsals = Rehearsal::all();
        
        $user->name = $userData['name'];
        $user->instrument_id = $userData['instrument_id'];
        foreach ($rehearsals as $r) {
            $statusId = isset($userData['rehearsals'][$r->id]) ? $userData['rehearsals'][$r->id] : 0;
            if (!$user->rehearsals->contains($r)) {
                $user->rehearsals()->attach($r, ['status_id' => $statusId]);
            } else {
                $user->rehearsals()->updateExistingPivot($r->id, ['status_id' =>$statusId ]);
            }
        }
        $user->save();

        return redirect()->route('presence');
    }

}
