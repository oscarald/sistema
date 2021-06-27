<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    use HasFactory;

    protected $fillable = ['renca', 'ci', 'domicilio', 'ciudad', 'departamento', 'telefono', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function consultors(){
        return $this->hasMany('App\Models\Consultor');
    }


}
