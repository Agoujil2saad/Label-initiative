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


//static pages routing
Route::get('/qui_sommes_nous', 'StaticPagesController@qui_sommes_nous');
// home page and deposer projet routing 
Route::get('/', 'HomeController@index')->name('home');
Route::get('/deposer', 'DeposerProjetController@index');
Route::post('/deposer', 'DeposerProjetController@store');
// espace porteur de projet routing

Route::get('/espace_porteur/chat', 'EspacePorteurProjetController@chat');
Route::get('/espace_porteur', 'EspacePorteurProjetController@index')->name('projet_news');

Route::get('/espace_porteur/edit', 'EspacePorteurProjetController@edit');

Route::get('/espace_porteur/createnouvelle', 'EspacePorteurProjetController@createNouvelle');

Route::post('/espace_porteur','EspacePorteurProjetController@storeNouvelle')->name('store_nouvelle');

Route::Delete('/espace_porteur/photonouvelle/{id}','EspacePorteurProjetController@destroy')->name('deletephoto_nouvelle');
//projet routing
Route::post('favorite/{projet}', 'ProjetController@favoriteProjet');
Route::post('unfavorite/{projet}', 'ProjetController@unFavoriteProjet');

Route::put('/projet/{id}', 'ProjetController@updatephotos')->name
('updatephotos');

Route::Delete('/projet/photo/{id}', 'ProjetController@destroyphoto')->name('deletephoto');


Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('projet', 'ProjetController');
Route::resource('partenaire', 'PartenaireController');
Route::resource('evenement', 'EvenementController');
//notification routing

Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');

//talk routing


Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
   Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
   Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});

