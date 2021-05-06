<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    //protected $table = 'reservations';

    protected $fillable = [
        'user_id', 'chambre_id', 'date_debut', 'date_fin', 'nombre_de_personne'
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function chambre()
    {
        return $this->belongsTo(Chambre::class, 'chambre_id');
    }
}
