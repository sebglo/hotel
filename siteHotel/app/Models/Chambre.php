<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $table = 'chambres';

    protected $fillable = [
        'taille','nombre_de_lit', 'type_de_lit', 'balcon', 'prix'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class,'chambre_id');
    }


}
