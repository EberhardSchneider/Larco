<?php

namespace App\Http\Controllers;

use App\Models\Rehearsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    function show()
    {
        $u = Auth::user();
        $user =  [
            'name' => $u->name,
            'instrument' => $u->instrument->name,
            'instrument_id' => $u->instrument->id,
            'rehearsals' => $u->rehearsals->map(function($r) { return $r->id; }),
            'activated' => $u->activated_at !== null
        ];
        $rehearsals = Rehearsal::all()->map(function ($r) {
            return [
                'id' => $r->id,
                'date' => $r->date_begin->format('d M Y'),
                'program' => $r->program
            ];
        });
        return Inertia::render('Dashboard', [ 'user' => $user, 'rehearsals' => $rehearsals ]);
    }
}