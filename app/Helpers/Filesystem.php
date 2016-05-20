<?php  

namespace App\Helpers;

class Filesystem
{
	static function upload($file)
	{
		// subir la imagen al servidor
            $path ='/img/libros'; // ruta destino
            $nombre = $file->getClientOriginalName();
            if($file->move(public_path().$path, $nombre)){
                return $path.='/'.$nombre;
              	
            }
            
            return $path=false;
	}
	
}