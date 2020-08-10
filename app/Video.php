<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'title',
    	'url',
    	'description',
    	'user_id'
    ];

    //film ma swojego autora 
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    //Film ma wiele kategorii
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
