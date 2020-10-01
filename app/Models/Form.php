<?php

namespace App\Models;

use App\Models\User;
use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'mes','lugar','localidad','barrio','tipodehecho','personasidentificadas','clanasociado','movil','elementossecuestrados','observaciones','linkdeorigen','latitud','longitud','anio','linkadicional1','linkadicional2','observaciones2'];

}
