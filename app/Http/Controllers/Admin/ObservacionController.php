<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tramite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ObservacionController extends Controller
{
    public function download($id)
    {
        $tramite = Tramite::find($id);
        return Storage::download($tramite->obserosc);
        //return $tramite;
    }

    public function download2($id)
    {
        $tramite = Tramite::find($id);
        return Storage::download($tramite->obseraacn);
        //return $tramite;
    }
}

