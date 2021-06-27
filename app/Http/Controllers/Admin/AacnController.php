<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\User;
use App\Models\Consultor;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;


class AacnController extends Controller
{
    public function asignar()
    {
        //$tramites = Tramite::all();
        $tramites = Tramite::where('estado', '=', 4)
                            ->orWhere('estado', '=', 5)
                            ->get();
        //return $tramites;
        $users = User::role('RevisorAACN')->pluck('name', 'id');
        //return $users;
        return view('admin.aacn.asignar', compact('tramites', 'users'));

    }

    public function aceptar(Request $request)
    {
        $tramite = Tramite::find($request->tramite_id);
        $tramite->user_id = $request->user;
        $tramite->estado = 6;
        $tramite->revaacn = 0; 
        
        $tramite->save();

        $user = User::find($request->user);
        return redirect()->route('admin.aacn.asignar')->with('info', 'Se asigno correctamente el trámite a ' . $user->name );
    }


    public function revisar()
    {
        $tramites = Tramite::select('*')
                ->where('user_id', '=', auth()->user()->id)
                ->where('revaacn', '=', 0)
                ->paginate();
        //return $tramites;

        return view('admin.aacn.revisar', compact('tramites'));

    }

    public function revisaraacn()

    {
        $tramites = Tramite::whereNotNull('resaacn')->get();
        //return $tramites;

        return view('admin.osc.revisaraacn', compact('tramites'));
    }


    public function finalizar($id)
    {
        $tramite = Tramite::find($id);
        //return $tramite;
        $revisor = User::where('id', '=', $tramite->user_id)->first();
        //return $revisor;
        $consultor = Consultor::where('id', '=', $tramite->consultor_id)->first();
        // return $consultor;
        $nombre = User::where('id', '=', $consultor->user_id)->first();
        //return $nombre;
        return view('admin.aacn.finalizar', compact('tramite', 'consultor', 'nombre'));

    }

    public function store(Request $request)
    {
        //return $request;

        $tramite = Tramite::find($request->id);

        $observacion = Storage::put('observaciones', $request->file('observacion'));
        $tramite->obseraacn = $observacion;

        $resolucion = Storage::put('resoluciones', $request->file('resolucion'));
        $tramite->resaacn = $resolucion;
        
        $tramite->revaacn = $request->status;
        if($request->status == 2){
            $tramite->estado = 8;
        } elseif($request->status == 1){
            $tramite->estado = 7;
        } elseif($request->status == 3){
            $tramite->estado = 9;
        }
        //return $tramite;
        $tramite->save();
        return redirect()->route('admin.aacn.revisor')->with('info', 'Se envio la informacíon correctamente correctamente ' );
    }


    public function estado()
    {

        $tramites = Tramite::orderBy('id', 'desc')->where('estado', '>', 3)->get();
        $users = User::all();
        //return $tramites;

        return view('admin.osc.estado', compact('tramites', 'users'));

    }
}
