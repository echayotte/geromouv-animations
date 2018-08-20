<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name'];

    // relation many to many (with pivot table activity_member)
    public function members()
    {
        return $this->belongsToMany('App\Member');
    }
}
