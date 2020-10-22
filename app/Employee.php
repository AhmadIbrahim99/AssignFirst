<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'reportsTo' ,
        'LastName' ,
        'FirstName'
        ,'Extension',
        'Email'
        ,
        'JobTitle'

    ];
}
