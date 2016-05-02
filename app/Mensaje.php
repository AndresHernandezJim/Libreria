<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table= "mensaje";

    protected $primaryKey ="idmensaje";

    protected $fillable = ['nombre','email','mensaje'];

}
