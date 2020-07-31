<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'phone', 'dob', 'gender', 'position', 'description',
    ];

    public function course()
    {
    	return $this->hasMany('App\Course');
    }

    public function department()
    {
    	return $this->hasMany('App\Department', 'id');
    }

}
