<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['id','fecha', 'mes','lugar','localidad','barrio','tipodehecho','personasidentificadas','clanasociado','movil','elementossecuestrados','observaciones','linkdeorigen','latitud','longitud','anio','linkadicional1','linkadicional2','observaciones2'];

    protected $table = 'rosariounificado_analisis.flagrancia_rosario_clipping';
}
