<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $table = 'chauffeurs';
    protected $fillable = [
        "nom",
        "prenom",
        "age",
        "CNI",
        "numPermis",
        "marqueVoiture",
        "matriculeVoiture",
        "status",
        "tel"
    ];
    public function Reservation(){
        return $this->hasMany(Reservation::class, "chauffeur_id", "id");
    }
}
