<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
//    protected $primaryKey='id';
    protected $fillable = [
        'home','image','background'
    ];
}
