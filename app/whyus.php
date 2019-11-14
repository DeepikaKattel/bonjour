<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class whyus extends Model
{
    protected $primaryKey='id';
    protected $fillable=[
        'Heading','Title','Paragraph','Paragraph1','Paragraph2','Paragraph3','Image'
    ];
}
