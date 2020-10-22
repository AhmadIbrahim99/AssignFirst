<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'City' ,
        'Phone' ,
        'Address1'
        ,'Address2',
        'State'
        ,
        'Country'
        ,
        'PostalCode'
        ,
        'Territory'
    ];
}
