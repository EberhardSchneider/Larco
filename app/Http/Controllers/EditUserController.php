<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EditUserController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->get()->first();
        return Inertia::render('EditUser', [
            'name' => $user->name,
            'address' => $user->address,
            'phone' => $user->phone,
            'mobile' => $user->mobile,
            'instrument_id' => $user->instrument_id,
            'instruments' => Instrument::all()->map(function ($i) { return $i->name; })
        ]);
    }
}
