<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ["category", "icon"];

    public function events()
    {
        return $this->belongsToMany('App\Event', 'has_categories');
    }
}
