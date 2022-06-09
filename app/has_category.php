<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_category extends Model
{
    protected $fillable = ["id_event", "id_category"];

    public $timestamps = false;
}
