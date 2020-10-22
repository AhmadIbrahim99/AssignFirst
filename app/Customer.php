<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'Name' ,
        'LastName' ,
        'FirstName'
        ,'Address1',
        'Address2'
        ,
        'City'
        ,
        'State'
        ,
        'PostalCode'
        ,
        'Country'
        ,
        'CredLimit'
    ];
}
