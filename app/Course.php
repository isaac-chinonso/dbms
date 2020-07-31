<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturer()
    {
    	return $this->belongsTo('App\Lecturer');
    }

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id');
    }
}
