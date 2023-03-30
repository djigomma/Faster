<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;

    public function Reservation(){
        return $this->hasMany(Reservation::class, "lieu_depart_id", "id");
    }

    public function Reservation2(){
        return $this->hasMany(Reservation::class, "lieu_arrivee_id", "id");
    }
}
