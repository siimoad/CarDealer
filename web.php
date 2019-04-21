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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Client/recherche', function () {
    return view('Client.recherche');
});
Route::get('/Client/resultat', function () {
    return view('Client.resultat');
});
Route::get('/Client/profil', function () {
    return view('Client.profil');
});

Route::get('/Client/modifierprofil', function () {
return view('Client.modifierprofil');
});

Route::get('/Admin/accueil', function () {
    return view('Admin.accueil');
    });
Route::get('/Admin/gererpartenaire', function () {
return view('Admin.gererpartenaire');
    });
Route::get('/Admin/gererpannonce', function () {
return view('Admin.gererpannonce');
    });
Route::get('/Admin/gererclient', function () {
return view('Admin.gererclient');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
