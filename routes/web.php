<?php

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

// default laravel
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tesparameter/{oy}', function ($oy){
    return "<h1>halo $oy</h1>";
});

Route::get('/tesview/{uy}', function ($uy){
    return view('tesview', ["kuncinya" => $uy, "kunciduacoba" => $uy . " " . $uy]);
});

Route::get('/tescontroller', 'TesController@tesyuk');

// tugas

Route::get("/", "HomeController@home1");

Route::get("/register", "AuthController@register1");

Route::post("/welcome", "AuthController@welcome1");