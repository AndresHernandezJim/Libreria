<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    protected $table='Autor';
    protected $primaryKey="idAutor";
     protected $fillable = ['Nombre'];
     public $timestamps=false;
}
