<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Mutual extends Model
{
    // need for method sortable() in mutual.index Controller
    use Sortable;
    public $sortable = [
        'id',
        'name',
    ];

    protected $fillable = [
        //DB's column   
        'name',
    ];
}