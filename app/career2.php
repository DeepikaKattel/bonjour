<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career2 extends Model
{
    protected $table = 'career2s';
    protected $primaryKey='id';
    protected $fillable=[
        'Title','JobTitle','JobDescription','Deadline'
    ];
}