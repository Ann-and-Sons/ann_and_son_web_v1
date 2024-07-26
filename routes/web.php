<?php

use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('pages/about', 'App\Http\Controllers\AboutController@showAbout')->name('about');
Route::get('pages/contact', 'App\Http\Controllers\ContactController@showContact')->name('contact-us');
Route::get('pages/services-one','App\Http\Controllers\ServicesController@servicesOne')->name('services-one');
Route::get('pages/services-two','App\Http\Controllers\ServicesController@servicesTwo')->name('services-two');
Route::get('pages/services-three','App\Http\Controllers\ServicesController@servicesThree')->name('services-three');
Route::get('pages/services-four','App\Http\Controllers\ServicesController@servicesFour')->name('services-four');
