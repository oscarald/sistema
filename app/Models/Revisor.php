<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisor extends Model
{
    use HasFactory;

    protected $fillable = ['unidad', 'telefono', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function trabajadors(){
        return $this->hasMany('App\Models\Trabajador');
    }

    public function jefes(){
        return $this->hasMany('App\Models\Jefe');
    }

}
