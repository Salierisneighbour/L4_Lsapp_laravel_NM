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

Route::get('/', 'PagesController@index');

Route::get('/Services', 'PagesController@MoreinfoServices');

Route::get('/Team', 'PagesController@MoreinfoTeam');

Route::get('/Statistiques', 'PagesController@Statistiques');

Route::get('/Ordonance/{id}', 'FOController@Ordonance')->name('Ordonance');

Route::get('/Facture/{id}', 'FOController@Facture')->name('Facture');



Route::get('/Agenda', 'PagesController@Agenda');

Route::resource('posts','PostsController');

Route::post('/Conseil','Demande_Conseil@store')->name('DemandeConseil.store');

Route::get('/DConseil', 'Demande_Conseil@Liste');


Route::post('/RDV','Envoidemande@store')->name('RdvDemande.store');

Route::get('/DRDV', 'RdvDemande@Liste');

Route::resource('Chambres','ChambreController');

Route::resource('Patients','PatientController');

Route::resource('PatHosp','PatHospitaliseController');



Route::resource('Medecin','MedecinController');

Route::resource('/TodaysRdvs','RdvController');

Route::put('/RDVupdating/{id}','RdvDemande@updating')->name('RdvDemande.updating');

Route::post('/FPrint/{id}','FOController@Fprint')->name('PrintFacture');

Route::post('/Oprint/{id}','FOController@Oprint')->name('PrintOrdonance');

Route::get('/FFPrint/{id}','FOController@FFprint');

Route::get('/OOprint/{id}','FOController@OOprint');

Auth::routes();



