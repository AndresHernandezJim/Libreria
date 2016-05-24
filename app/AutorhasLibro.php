<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorhasLibro extends Model
{
  	protected $table="Autor_has_Libro";
    protected $primary_key="ID";
    protected $fillable=['Autor_idAutor','Libro_id_libro'];
    public $timestamps=false;
}
