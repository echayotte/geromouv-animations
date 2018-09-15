<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Pension extends Model
{
    // need for method sortable() in pension.index Controller
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
