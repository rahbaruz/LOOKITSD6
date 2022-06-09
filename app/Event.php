<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','desc','type','active','start_event','cp1','cp2','social','location','id_user'];

    protected $table = "events";

    public function users()
    {
        return $this->belongsTo('App\User', "id_user", "id");
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'has_categories', 'id_event', 'id_category');
    }

    public function images()
    {
        return $this->belongsToMany('App\image', 'has_images', 'id_event', 'id_image');
    }

    public function user_register()
    {
        return $this->belongsToMany('App\User', 'has_register', 'id_event', 'id_user');
    }
}
