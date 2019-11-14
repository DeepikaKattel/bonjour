<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $fillable = [
        'name','idnum','phone','email','fathername','mothername','district','municipality','ward','street','zip',
        'criminal','duty','deadline','skills','language','salary','work','education','university','apply','message',
        'idimg','cv','pp',
    ];
}
