<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $fillable = [
		'name', 'owner_id', 'privacy_status',
	];

     public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
