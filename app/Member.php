<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $dates = ['birthday'];

    protected $fillable = [
        'lastname',
        'firstname',
        'birthday',
        'gender',
        'address',
        'zipcode',
        'city',
        'email',
        'phone',
        'cellphone',
        'mutual',
        'pension'
    ];

    // naming this function by the foreignkey without the id so Laravel can retrieve it without problem
    public function pension(){
        return $this->belongsTo('App\Pension');
    }

    public function mutual()
    {
        return $this->belongsTo('App\Mutual');
    }
}