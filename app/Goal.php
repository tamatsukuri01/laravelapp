<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    public function user()
    {
        return $this->belongsTo('App\user');
    }
    
    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
}
