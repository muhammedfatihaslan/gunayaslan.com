<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.index');
// });
Route::group(['namespace'=>'App\Http\Controllers\admin','prefix'=>'/admin','as'=>'admin.','middleware'=>'auth'],function(){
    Route::get('/anasayfa','indexController@index')->name('index');

    // search
    Route::GET('/arama','search\indexController@index')->name('search');
    // customer
    Route::get('/mukellef','customer\indexController@index')->name('customer');
    Route::get('/mukellef/ekle','customer\indexController@create')->name('customer.create');
    Route::POST('/mukellef/kaydet','customer\indexController@store')->name('customer.store');
    Route::GET('/mukellef/duzenle/{id}','customer\indexController@edit')->name('customer.edit');
    Route::POST('/mukellef/duzenle/{id}','customer\indexController@update')->name('customer.update');
    Route::GET('/mukellef/{id}','customer\indexController@detail')->name('customer.detail');
    // price
    Route::GET('/hesap','price\indexController@index')->name('price');
    Route::GET('/hesap/ekle/{id}','price\indexController@create')->name('price.create');
    Route::POST('/hesap/ekle','price\indexController@store')->name('price.store');
    Route::GET('/hesap/duzenle/{id}','price\indexController@edit')->name('price.edit');
    Route::POST('/hesap/duzenle/{id}','price\indexController@update')->name('price.update');
    // pay
    Route::GET('/odeme','pay\indexController@index')->name('pay');
    Route::GET('/odeme/ekle','pay\indexController@create')->name('pay.create');
    Route::GET('/odeme/ekle/{id}','pay\indexController@createid')->name('pay.createid');
    Route::POST('/odeme/ekle','pay\indexController@store')->name('pay.store');
    Route::GET('/odeme/detay/{id}','pay\indexController@detail')->name('pay.detail');
    // Route::GET('/odeme/sil/{id}','pay\indexController@delete')->name('pay.delete');
    // gib
    Route::get('/mukellef/gib/{id}','gib\indexController@index')->name('gib');
    Route::POST('/mukellef/gib','gib\indexController@update')->name('gib.update');
    // sgk
    Route::get('/mukellef/sgk/{id}','sgk\indexController@index')->name('sgk');
    Route::POST('/mukellef/sgk','sgk\indexController@update')->name('sgk.update');
    // notebook
    Route::get('/notdefteri','notebook\indexController@index')->name('notebook');
    Route::get('/notdefteri/duzenle/{id}','notebook\indexController@edit')->name('notebook.edit');
    Route::POST('/notdefteri/duzenle/','notebook\indexController@update')->name('notebook.update');
})->middleware('auth');
Route::group(['namespace'=>'App\Http\Controllers\front','prefix'=>'/','as'=>'front.'],function(){
    Route::get('/','index\indexController@index')->name('index');
    Route::get('/hizmetlerimiz','services\indexController@index')->name('services');
    Route::get('/iletisim','contact\indexController@index')->name('contact');

});
Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
