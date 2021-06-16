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
    return view('index');
});

Route::get('/helloworld', function () {
    $names = ["Twan", "Thomas", "Test"];
    return view('helloworld',['name' => 'Twan', 'names' => $names]);
});

Route::resource('greetings', 'App\Http\Controllers\GreetingController');

Route::get('/showgreetings',function () {
    return view('showgreetings');
});

Route::get('/showgreetings2', 'App\Http\Controllers\HelloworldController@ShowGreetings');

Route::get('/ARandomGreeting', 'App\Http\Controllers\ARandomGreeting@Getrandomgreeting');
