<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addressbook extends Model
{
    //
    protected $fillable = [
        'title','name', 'contact_number', 'address_from_1','address_to_1','pincode','city','state','country',
    ];
}
