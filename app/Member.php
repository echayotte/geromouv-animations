<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // needed to format the date first but then it didn't permit to update a member so commented
    // protected $dateFormat = 'Y-m-d';
    protected $dates = ['birthday'];
    
    // with Controller's function Create:: => Authorize the column to be fillable 
    protected $fillable = [
        //DB's column   
        'lastname',
        'firstname',
        'birthday',
        'gender',
        'address',
        'zipcode',
        'city',
        'email',
        'primaryphone',
        'mutual_id',
        'pension_id',
    ];

    // naming theses functions by their foreignkey without the id for Laravel's nomenclature
    // relation one to many (inverse)
    public function mutual()
    {
        return $this->belongsTo('App\Mutual');
    }

    // relation one to many (inverse)
    public function pension()
    {
        return $this->belongsTo('App\Pension');
    }
    
    // relation many to many (with pivot table activity_member)
    public function activities()
    {
        return $this->belongsToMany('App\Activity');
    }
}