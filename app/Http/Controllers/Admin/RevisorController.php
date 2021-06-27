<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Revisor;
use Illuminate\Http\Request;


class RevisorController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'renca'     =>  'required',
            'ci'        =>  'required',
            'domicilio'        =>  'required',
            'ciudad'    =>  'required',
            'departamento'     =>  'required',
            'telefono'     =>  'required',
        ]);
        
        dd($request);
        $tramite = Revisor::create($request->all());
        $tramite->save();
        return redirect()->route('admin.tramites.index')->with('info', 'Se completaron los datos correctamente');
    }
}
