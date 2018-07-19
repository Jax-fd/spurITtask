<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'description', 'status',
    ];

    /*protected $hidden = [
        'password', 'remember_token',
    ];*/
	
	/*public function words()
	{
		return $this->belongsToMany('App\Word','users_words')
							->withPivot('status', 'stage','date_of_repeat')
							->withTimestamps();
	}*/
}
