<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/* backend */

Route::prefix('admin')->name('admin.')->group(function(){
//başlarına admin yazmamıza gerek kalmadı admini ön tanım haline getirdik
Route::get('panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
Route::get('giris','App\Http\Controllers\Back\AuthController@login')->name('login');
Route::post('giris','App\Http\Controllers\Back\AuthController@loginPost')->name('login.post');
Route::get('cikis','App\Http\Controllers\Back\AuthController@logout')->name('logout');

});



/* frontend */

Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact');
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
Route::get('/category/{category}','App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');

