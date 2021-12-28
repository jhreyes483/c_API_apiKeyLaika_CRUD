<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::group(['middleware'=>['api-key-laika']], function (){
    Route::resource('categorias',CategoriaController::class);
});

Route::get('notoken', function (){
    return response()->json(['status'=>'ok','msg'=>'Accesos no autorizado'], 400 );
});
