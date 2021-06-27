<?php

namespace App\Observers;

use App\Models\Tramite;
use App\Models\Consultor;
use App\Models\User;
use App\Mail\TramitesMailable;
use Illuminate\Support\Facades\Mail;

class TramiteObserver
{
    /**
     * Handle the Tramite "created" event.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return void
     */
    
    public function creating(Tramite $tramite)
    {

        $consultor = Consultor::where('user_id', auth()->user()->id)->first();
        $tramite->consultor_id = $consultor->id;

    }
    
     public function created(Tramite $tramite)
    {

        

        $consultor = Consultor::where('id', $tramite->consultor_id)->first();
        $usuario = User::where('id', $consultor->user_id)->first();


        $correo = new TramitesMailable($tramite);
        Mail::to($usuario->email)->send($correo);

    }

    public function updated(Tramite $tramite)
    {

        if($tramite->estado == 4){

            $consultor = Consultor::where('id', $tramite->consultor_id)->first();
            $usuario = User::where('id', $consultor->user_id)->first();

            $correo = new TramitesMailable($tramite);
            Mail::to($usuario->email)->send($correo);
        
        } elseif ($tramite->estado == 8){

            $consultor = Consultor::where('id', $tramite->consultor_id)->first();
            $usuario = User::where('id', $consultor->user_id)->first();

            $correo = new TramitesMailable($tramite);
            Mail::to($usuario->email)->send($correo);
        } elseif ($tramite->estado == 9){

            $consultor = Consultor::where('id', $tramite->consultor_id)->first();
            $usuario = User::where('id', $consultor->user_id)->first();

            $correo = new TramitesMailable($tramite);
            Mail::to($usuario->email)->send($correo);
        } elseif ($tramite->estado == 3 || $tramite->estado == 7){

            $consultor = Consultor::where('id', $tramite->consultor_id)->first();
            $usuario = User::where('id', $consultor->user_id)->first();

            $correo = new TramitesMailable($tramite);
            Mail::to($usuario->email)->send($correo);
        }
        
        //dd($tramite);



    }
    

    /**
     * Handle the Tramite "updated" event.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return void
     */

}
