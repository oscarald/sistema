<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    protected $fillable = ['representante', 'testimonio', 'nombre', 'empresa', 'tipo', 'documento', 'estado', 'resosc', 'resaacn', 'revosc', 'revaacn', 'obserosc', 'obseraacn'];

    public function consultor(){
        return $this->belongsTo('App\Models\Consultor');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jefes(){
        return $this->belongsToMany('App\Models\Jefe');
    }

}
