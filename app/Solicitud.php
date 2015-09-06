<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nombres',
    'numerocelular',
    'email',
    'piso',
    'comentario',
    'fecha',
    'hora',
    'qtyhoras'
    ];
}
