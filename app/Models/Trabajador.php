<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    public function revisor(){
        return $this->belongsTo('App\Models\Revisor');
    }

    public function tramites(){
        return $this->belongsToMany('App\Models\Tramite');
    }

}
