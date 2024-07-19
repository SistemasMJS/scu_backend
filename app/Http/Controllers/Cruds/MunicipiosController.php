<?php

namespace App\Http\Controllers\Cruds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoMunicipios;
use Illuminate\Support\Facades\DB;

class MunicipiosController extends Controller
{
    public function getMunicipios(){

        $data = DB::connection('mysql2')
        ->table('catalogo_colonias_estado')
        ->select('no_municipio','nombre_municipio')
        ->groupBy('no_municipio','nombre_municipio')
        ->get();

        // $data = CatalogoMunicipios::get();

        return response()->json($data, 200);
    }
}
