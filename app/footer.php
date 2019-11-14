<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $primaryKey='id';
    protected $fillable=[
        'Address','Country','PhoneNumber','Email'
    ];

}
