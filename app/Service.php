<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'main_heading1', 'sub_heading1', 'content1', 'sub_heading2', 'content2', 'main_heading2', 'sub_heading3', 'content3',
    ];
}
