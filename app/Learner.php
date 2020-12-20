<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['user_id', 'level', 'status'];
}
