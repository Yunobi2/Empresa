<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    // esta webada recien lo he agregado, por sicaso para problemas futuros protected $table = 'persona';
    protected $table = 'persona';
    protected $primaryKey = 'nPerCodigo';
    protected $fillable = ['cPerRnd', 'cPerApellido', 'cPerNombre', 'cPerDireccion', 'dPerFecNac', 'nPerEdad', 'nPerSueldo', 'cPerEstado'];
    protected $guarded = [];    
}


