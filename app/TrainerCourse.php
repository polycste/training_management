<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerCourse extends Model
{
    protected $table='trainercourses';
    protected $fillable=['trainer_id','course_id'];

}
