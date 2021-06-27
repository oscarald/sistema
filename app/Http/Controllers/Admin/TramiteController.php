<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Consultor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos = Consultor::where('user_id',Auth::id())->first();
        // dd($datos);
        // Debugbar::error('hello');

        $tramites = Tramite::all();
        // dd($tramites);
        return view('admin.tramites.index', compact('datos', 'tramites', ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tramites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'representante' =>  'required',
            'testimonio'    =>  'required',
            'nombre'        =>  'required',
            'documento'     =>  'file|max:102400',
        ]);
        $documento = Storage::put('documentos', $request->file('documento'));
        
        $tramite = Tramite::create($request->all());
        $tramite->documento = $documento;
        //return $request->tipo;
        if(($request->tipo == 'FNCA') || ($request->tipo == 'ITE')){
            $tramite->estado = 5;
        }
        $tramite->save();
        return redirect()->route('admin.tramites.index')->with('info', 'El trámite se mando correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tramite $tramite)
    {
        return view('admin.tramites.show', compact('tramite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tramite = Tramite::find($id);
        
        return view('admin.tramites.edit', compact('tramite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tramite $tramite)
    {
        //return $tramite;
        $request->validate([
            'representante' =>  'required',
            'testimonio'    =>  'required',
            'nombre'        =>  'required',
            'documento'     =>  'file|max:102400',
        ]);
        $documento = Storage::put('documentos', $request->file('documento'));
        $tramite->update($request->all());
        
        $tramite->documento = $documento;
        
        if($tramite->estado == 3){
            $tramite->estado = 1;
            $tramite->ctrobs = 1;
        } elseif($tramite->estado == 7){
            $tramite->estado = 5;
            $tramite->ctrobs = 2;
        }
        
        $tramite->revosc = 0;
        $tramite->user_id = NULL;
        
        $tramite->save();
        return redirect()->route('admin.tramites.index')->with('info', 'El trámite corregido se mando correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tramite $tramite)
    {
        //
    }



}
