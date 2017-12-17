<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{

    public function promedioResena(){
        $servicios = Servicio::where('idOrganizacion', $this->attributes['id'])->get();

        $suma = 0;
        foreach($servicios as $servicio){
            $suma += $servicio->attributes['nivel'];
        }

        if ($suma!=0){
            return $suma/count($servicios);
        }
    }
}
