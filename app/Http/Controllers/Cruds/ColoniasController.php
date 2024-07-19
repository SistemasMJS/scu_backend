<?php

namespace App\Http\Controllers\Cruds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoColoniasEstado;
use Illuminate\Support\Facades\DB;

class ColoniasController extends Controller
{
    public function getColonias(Request $request){

        
        $data = DB::connection('mysql2')
        ->table('catalogo_colonias_estado')
        ->select('id_colonia','colonia')
        ->where('no_municipio',$request->idMunicipality)
        ->get();


        // $data = CatalogoColoniasEstado::where('no_municipio',)->get();

        return response()->json($data, 200);
    }
}
