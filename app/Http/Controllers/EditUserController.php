<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
            'id' => $user->id,
            'name' => $user->name,
            'address' => $user->address,
            'phone' => $user->phone,
            'mobile' => $user->mobile,
            'instrument_id' => $user->instrument_id,
            'instruments' => Instrument::all()->map(function ($i) { return $i->name; })
        ]);
    }

    
    function store(Request $request) {
     
        $user = User::where('id', $request->id)->get()->first();
        $user->name = $request->name;
        $user->instrument_id = $request->instrumentId;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
