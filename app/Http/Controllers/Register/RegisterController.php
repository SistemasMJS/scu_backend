<?php

namespace App\Http\Controllers\Register;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function getAdvances(Request $request)
    {  
        $firstName      = $request->json('firstName');        
        $lastName       = $request->json('lastName');   
        $name           = $request->json('name');   
        $uniqueKey      = $request->json('uniqueKey');


        $adv = DB::table('advance as a')                
                    ->select('a.id')
                    ->where('id',$firstName);
    }
}
