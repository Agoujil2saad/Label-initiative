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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/deposer', 'DeposerProjetController@index');
Route::post('/deposer', 'DeposerProjetController@store');
Route::get('/espace_porteur', 'EspacePorteurProjetController@index');

Route::get('/espace_porteur/edit', 'EspacePorteurProjetController@edit');




Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('projet', 'ProjetController');
Route::resource('partenaire', 'PartenaireController');
Route::resource('evenement', 'EvenementController');
