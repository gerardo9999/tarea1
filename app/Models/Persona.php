<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primaryKey = 'ci';
    protected $table = 'persona';

    protected $fillable = [
        'ci',
        'nombre',
        'apellidos',
        'sexo',
        'fecha_nac'
    ];
    public $timestamps = false;

}
