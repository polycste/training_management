<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraineeCourse extends Model
{
    protected $table='traineeCourses';
    protected $fillable=['course_id', 'trainee_id'];

    /*public function course()
    {
        return $this->hasMany('App\Course', 'id');
    }*/
}
