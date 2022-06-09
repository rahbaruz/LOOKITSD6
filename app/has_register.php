<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_register extends Model
{
    protected $fillable = ["id_event", "id_user"];

    public $timestamps = false;
}
