<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    public function user()
    {   
        return $this->belongsTo('App\User');
    }  

    public function film()
    {   
        return $this->belongsTo('App\Film');
    }  
}
