<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function instructor() {
        return $this->belongsTo('App\Instructor');
    }

    protected $fillable = [
        'name', 'description', 'start', 'end', 'tags', 'instructor_id',
    ];
}
