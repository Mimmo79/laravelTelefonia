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

// Route::get('/', function () {
//     $tasks = [
//       'vai a pescare',
//       'vai a cagare',
//       'vattene'
//     ];

Route::resource('/projects','PagesController');
Route::resource('/telefonia', 'telefoniacontroller');
Route::get('/base', function () {
    return view('base.base');
});
Route::get('/mobile', function () {
    return view('/mobile/index-mobile');
});
Route::resource('/mobile/nuovo-terminale', 'ControllerTerminali');


  // Route::get('/','PagesController@home');
  // Route::get('/about','PagesController@about');


    /*
    modo A
    return view('welcome')->withTasks($tasks)->withPippo('pippo è il padrone di pluto')->withQueryname(request('titolo'));

    modo B
    return view('welcome',[
      'tasks' => $tasks,
      'pippo' => 'pippo è il padrone di pluto', /*posso passare n variabili
      'queryname' => request('titolo')
    ]);


Route::get('/about', function () {

    return view('about');
});

*/
