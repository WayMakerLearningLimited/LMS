<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $dates = ['start_date'];

    public function lessons()
    {
    	return $this->hasMany('App\Module');
    }

    public function scopePaid($query)
    {
    	return $query->where('free_course', 0);
    }

    public function scopeFree($query)
    {
      return $query->where('free_course', 1);
    }

       public function scopePublished($query)
    {
      return $query->where('published', 1);
    }

    public function categories()
    {
       return $this->belongsToMany('App\CourseCategory','course_pivot_categories', 'course_id', 'course_category_id');
    }
}
