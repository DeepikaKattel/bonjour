<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contactuses';
    protected $fillable = ([
        'name', 'email', 'subject', 'message'
    ]);
}
