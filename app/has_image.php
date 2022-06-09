<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_image extends Model
{
    protected $fillable = ["id_event", "id_image"];

    public $timestamps = false;
}
