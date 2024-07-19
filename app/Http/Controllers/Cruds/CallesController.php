<?php

namespace App\Http\Controllers\Cruds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoCallesEstado;
use Illuminate\Support\Facades\DB;

class CallesController extends Controller
{
    public function getCalles(Request $request){

        $data = DB::connection('mysql2')
        ->table('catalogo_calles_estado')
        ->select('id','calle')
        ->where('id_municipio',$request->idMunicipality)
        ->where('id_colonia',$request->idColony)
        ->get();

        return response()->json($data, 200);
    }
}
