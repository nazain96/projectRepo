<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rule1', function () {
    return view('UI.ruledesign');
});

Route::get('/rule2', function () {
    return view('UI.rulepage2');
});

Route::get('/ruleform', function () {
    return view('UI.ruleform');
});

// Route::get('/rule3', function () {
//     return view('UI.rulepage3');
// });

Route::get('/rulepage3', 'PendingEventsController@index' )->name('index');

Route::post('/rulepage3', 'SidmapsController@store' )->name('store');

Route::get('/rulepage3', 'PendingEventsController@search' )->name('search');