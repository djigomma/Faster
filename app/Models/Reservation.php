<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $fillable = [
        'client_id',
        'chauffeur_id',
        'lieu_depart_id',
        'lieu_arrivee_id'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
    public function Chauffeur(){
        return $this->belongsTo(Chauffeur::class, 'chauffeur_id', 'id');
    }

    public function Lieu(){
        return $this->belongsTo(Lieu::class, 'lieu_depart_id', 'id');
    }

    public function Lieu2(){
        return $this->belongsTo(Lieu::class, 'lieu_arrivee_id', 'id');
    }

}
