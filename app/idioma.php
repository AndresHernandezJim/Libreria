<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
     protected $table = 'Idioma';
     protected $primaryKey="id_Idioma";
    protected $fillable = ['id_Idioma','nombre'];
}
