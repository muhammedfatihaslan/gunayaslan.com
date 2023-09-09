<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProv**er and all of them will
| be assigned to the "web" m**dleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.index');
// });
Route::group(['namespace'=>'App\Http\Controllers\admin','prefix'=>'/admin','as'=>'admin.','m**dleware'=>'auth'],function(){
    Route::get('/anasayfa','indexController@index')->name('index');

    // search
    Route::GET('/arama','search\indexController@index')->name('search');
    // customer
    Route::get('/**','customer\indexController@index')->name('customer');
    Route::get('/**/**','customer\indexController@create')->name('customer.create');
    Route::POST('/**/kaydet','customer\indexController@store')->name('customer.store');
    Route::GET('/**/**/{**}','customer\indexController@edit')->name('customer.edit');
    Route::POST('/**/**/{**}','customer\indexController@update')->name('customer.update');
    Route::GET('/**/{**}','customer\indexController@detail')->name('customer.detail');
    // price
    Route::GET('/**','price\indexController@index')->name('price');
    Route::GET('/**/**/{**}','price\indexController@create')->name('price.create');
    Route::POST('/**/**','price\indexController@store')->name('price.store');
    Route::GET('/**/**/{**}','price\indexController@edit')->name('price.edit');
    Route::POST('/**/**/{**}','price\indexController@update')->name('price.update');
    // pay
    Route::GET('/**','pay\indexController@index')->name('pay');
    Route::GET('/**/**','pay\indexController@create')->name('pay.create');
    Route::GET('/**/**/{**}','pay\indexController@create**')->name('pay.create');
    Route::POST('/**/**','pay\indexController@store')->name('pay.store');
    Route::GET('/**/detay/{**}','pay\indexController@detail')->name('pay.detail');
    // Route::GET('/**/sil/{**}','pay\indexController@delete')->name('pay.delete');
    // gib
    Route::get('/**/gib/{**}','gib\indexController@index')->name('gib');
    Route::POST('/**/gib','gib\indexController@update')->name('gib.update');
    // sgk
    Route::get('/**/sgk/{**}','sgk\indexController@index')->name('sgk');
    Route::POST('/**/sgk','sgk\indexController@update')->name('sgk.update');
    // notebook
    Route::get('/**','notebook\indexController@index')->name('notebook');
    Route::get('/**/**/{**}','notebook\indexController@edit')->name('notebook.edit');
    Route::POST('/**/**/','notebook\indexController@update')->name('notebook.update');
});
Route::group(['namespace'=>'App\Http\Controllers\front','prefix'=>'/','as'=>'front.'],function(){
    Route::get('/','index\indexController@index')->name('index');
    Route::get('/hizmetlerimiz','services\indexController@index')->name('services');
    Route::get('/iletisim','contact\indexController@index')->name('contact');

});
Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
