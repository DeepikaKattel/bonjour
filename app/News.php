<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $primaryKey='id';
    protected $fillable=[
        'Heading1','Content1','Heading2','Content2','Heading3','Content3'
    ];
}

