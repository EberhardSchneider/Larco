<?php

namespace App\Http\Controllers;

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
                'rehearsals' => $u->rehearsals
            ];
        });
        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
