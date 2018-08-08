<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $dateFormat = 'Y-m-d';
    protected $dates = ['birthday'];

    // with function Create:: of the controller. Authorize the column to be fillable 
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
        // 'phone',
        'cellphone',
        'mutual_id',
        'pension_id',
    ];

    // naming this function by the foreignkey without the id so Laravel can retrieve it without problem
    public function mutual()
    {
        return $this->belongsTo('App\Mutual');
    }

    public function pension()
    {
        return $this->belongsTo('App\Pension');
    }
    
    
}