<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class vision extends Model
{
    protected $primaryKey='id';
    protected $fillable=[
        'Heading','Title','Points','Image'
    ];
}
