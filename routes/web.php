<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\pageController@index');

// Route::get('gato/{tipo?}', function ($tipo='sin tipo') {
//     return 'Esta es la pagina de gatos: '.$tipo;
// })->where('tipo','[A-Za-z]+');

Route::get('cattleya', 'App\Http\Controllers\pageController@inicio')->name('cattleya');

Route::get('perfumes','App\Http\Controllers\pageController@perfumes')->name('perfumes');

Route::get('nosotros/{nombre?}','App\Http\Controllers\pageController@nosotros')->name('nosotros');

Route::get('/{id}', 'App\Http\Controllers\pageController@detalle')->name('frascos.detalle');