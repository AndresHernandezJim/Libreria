<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
     protected $table = 'Idioma';
     protected $primaryKey="id_idioma";
    protected $fillable = ['id_idioma','nombre'];
    public $timestamps=false;
}
