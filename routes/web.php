<?php


use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\pageController@index')->name('index');

// Route::get('gato/{tipo?}', function ($tipo='sin tipo') {
//     return 'Esta es la pagina de gatos: '.$tipo;
// })->where('tipo','[A-Za-z]+');

Route::get('cattleya', 'App\Http\Controllers\pageController@cattleya')->name('cattleya');

Route::get('perfumes','App\Http\Controllers\pageController@perfumes')->name('perfumes');

Route::get('nosotros/{nombre?}','App\Http\Controllers\pageController@nosotros')->name('nosotros');

Route::get('/detalle/{id}', 'App\Http\Controllers\pageController@detalle')->name('frascos.detalle');

Route::get('/editar/{id}', 'App\Http\Controllers\pageController@editar')->name('frascos.editar');

Route::put('/editar/{id}','App\Http\Controllers\pageController@update')->name('frascos.update');

Route::post('/','App\Http\Controllers\pageController@crearFrascos') ->name('frascos.crear');

Route::delete('/eliminar/{id}','App\Http\Controllers\pageController@delete')->name('frascos.eliminar');