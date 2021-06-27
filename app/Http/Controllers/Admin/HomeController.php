<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Consultor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function create(Request $request) {
        $request->validate([
            'renca'     =>  'required',
            'ci'        =>  'required',
            'domicilio'        =>  'required',
            'ciudad'    =>  'required',
            'departamento'     =>  'required',
            'telefono'     =>  'required',
        ]);
        
        //dd($request);
        //$datos = Consultor::create($request->all());
        $datos = Consultor::create([
            'renca' => $request->renca,
            'ci' => $request->ci,
            'domicilio' => $request->domicilio,
            'ciudad' => $request->ciudad,
            'departamento' => $request->departamento,
            'telefono' => $request->telefono,
            'user_id' => Auth::id(),
        ]);
        //dd($datos);
        $datos->save();
        return redirect()->route('admin.tramites.index')->with('info', 'Se completaron los datos correctamente');
        
    }

}
