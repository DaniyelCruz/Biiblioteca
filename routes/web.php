<?php

use App\Http\Controllers\ControladorRequest;
use Illuminate\Support\Facades\Route;

Route::controller(ControladorRequest::class)->group(
    function(){
    
        Route::get('Principal', 'VP')->name('P');
        Route::get('Registrar', 'VR')->name('R');
        Route::post('GuardarRecuerdo', 'ProcesarRecuerdo');
    
    });