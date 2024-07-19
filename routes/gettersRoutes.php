<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cruds\CallesController;
use App\Http\Controllers\Cruds\ColoniasController;
use App\Http\Controllers\Cruds\EntidadesController;
use App\Http\Controllers\Cruds\MunicipiosController;
use App\Http\Controllers\Cruds\SeccionalesController;

Route::group([
    'middleware' => 'api'
], function ($router) {
    Route::post('/getEntidades', [EntidadesController::class, 'getEntidades'])->name('getEntidades');
    Route::post('/getMunicipios', [MunicipiosController::class, 'getMunicipios'])->name('getMunicipios');
    Route::post('/getCalles', [CallesController::class, 'getCalles'])->name('getCalles');
    Route::post('/getColonias', [ColoniasController::class, 'getColonias'])->name('getColonias');
    Route::post('/getSeccionales', [SeccionalesController::class, 'getSeccionales'])->name('getSeccionales');
});