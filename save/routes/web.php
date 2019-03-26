<?php
use \App\Enfant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

/*==============================================================*/
/* Route: INDEX			                                */
/*==============================================================*/

Route::get('/','WelcomeController@showWelcmePageAsLogin');


/*==============================================================*/
/* Route: SIGNIN	                                */
/*==============================================================*/

Route::resource('signin', 'LoginController');

//Route::get('signin','User\LoginController@showLoginForm')->name('signin');


//Route::post('signin', 'User\LoginController@logins');



/*==============================================================*/
/* Route: DASHBOARD				                                */
/*==============================================================*/


Route::get('dashboard', 'HomeController@showHomePage')->name('home1');



/*==============================================================*/
/* Route: ENREGISTREMENT ENFANT	                                */
/*==============================================================*/

				//*****AjoutEnfantPage******//

//Route::get('AjoutEnfant','GestEnfantController@showAddEnfantForm')->name('ajoutEnfant');

Route::get('ListeEnfant', 'ListeEnfantController@showListeEnfant')->name('listeEnfant');

Route::resource('ajoutEnfant', 'debutAjoutEnfantController');

Route::resource('finAjoutEnfant', 'finAjoutEnfantController');

Route::post('endAjout', 'GestEnfantController@AddEnfantForm');


/*==============================================================*/
/* Route: SELECTION	                                */
/*==============================================================*/
Route::resource('selectionEnfant', 'selectionController');


/*==============================================================*/
/* Route: ACCUEIL                                         */
/*==============================================================*/
			//************DEFAULT***************//


//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
