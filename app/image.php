<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = ["image"];

    public function events()
    {
        return $this->belongsToMany('App\Event', 'has_images');
    }
}
