<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeServices extends Model
{
    public function getTitle(){
        return $this->titulo_servicio;
    }
}
