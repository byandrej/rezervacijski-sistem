<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['ime', 'cena', 'kratek_opis', 'dolg_opis'];
}
