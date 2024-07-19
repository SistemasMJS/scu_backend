<?php

namespace App\Http\Controllers\Cruds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoSeccionales;

class SeccionalesController extends Controller
{
    public function getSeccionales(){

        $data = CatalogoSeccionales::get();

        return response()->json($data, 200);
    }
}
