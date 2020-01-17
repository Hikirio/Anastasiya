<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    public $timestamps = false;

    public function find_all()
    {
        return Depart::all();
    }
}
