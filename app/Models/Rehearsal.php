<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehearsal extends Model
{
    use HasFactory;

    protected $dates = ['date_begin', 'date_end'];

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }
}
