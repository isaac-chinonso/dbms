<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function course()
    {
    	return $this->hasMany('App\Course', 'id');
    }

    public function libary()
    {
    	return $this->belongsTo('App\Libary', 'id');
    }

    public function lecturer()
    {
    	return $this->belongsTo('App\Lecturer');
    }

    public function student()
    {
    	return $this->hasMany('App\Student', 'id');
    }
}
