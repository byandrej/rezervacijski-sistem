<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = ['ime', 'prihod', 'odhod', 'email', 'room_id', 'skupna_cena', 'telefon', 'sporocilo'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function getRoomNameAttribute()
    {
        return $this->room->ime;
    }
}
