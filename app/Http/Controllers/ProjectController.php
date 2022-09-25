<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Rehearsal;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function show($id) {
        $users = User::whereHas('projects', function ($q) use($id) {
            $q->where('id', $id);
        })->get()->map(function ($u) {
            return [
                'name' => $u->name,
                'instrument' => $u->instrument->name,
                'instrument_id' => $u->instrument->id,
                'rehearsals' => $u->rehearsals->map(function($r) { return $r->pivot->status_id; }),
                'activated' => $u->activated_at !== null
            ];
        });
        $rehearsals = Rehearsal::where('project_id', $id)->get()->map(function ($r) {
            return [
                'id' => $r->id,
                'date' => $r->date_begin->format('d M Y'),
                'program' => $r->program
            ];
        });
        $project = Project::where('id', $id)->get()->first();
        return Inertia::render('Project', [
            'users' => $users,
            'rehearsals' => $rehearsals,
            'project' => $project
        ]);
    }
}
