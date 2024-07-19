<?php
namespace App\Http\Controllers\Cruds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoEntidades;
use Illuminate\Support\Facades\DB;


class EntidadesController extends Controller
{
    public function getEntidades(){

        $data = CatalogoEntidades::get();

        return response()->json($data, 200);
    }
}
