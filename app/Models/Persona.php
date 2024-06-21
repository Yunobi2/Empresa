<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'nPerCodigo';
    protected $fillable = ['cPerRnd', 'cPerApellido', 'cPerNombre', 'cPerDireccion', 'dPerFecNac', 'nPerEdad', 'nPerSueldo', 'cPerEstado'];
    protected $guarded = [];
    
}
