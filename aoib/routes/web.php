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

//Route::post('endAjout', 'GestEnfantController@AddEnfantForm');


/*==============================================================*/
/* Route: SELECTION	                                */
/*==============================================================*/
Route::resource('selectionEnfant', 'selectionController');



/*==============================================================*/
/* Route: ACTION ADMINISTRATEUR	                                */
/*==============================================================*/
Route::resource('droituser', 'userController');

Route::resource('parrinage', 'parinController');


/*==============================================================*/
/* Route: GESTION DOCUMENT                           */
/*==============================================================*/

Route::get('ConslutationDocument', 'ConsultDocController@showConsultDoc')->name('ConsultDoc');

//Route::post('ConsultDoc');
				//LISTECLIENTJSON_REMPLISSAGE
Route::get('ListeEnfantJson', 'ConsultDocController@listEnfantJson');

Route::resource('dd', 'ddController');
				
				//CHILDATA8SELECT_REMPLISSAGE
Route::get('donneEnfant', 'childDataController@showChildDataPage')->name('dataChild');

   				//RECHERCHE ENFANT ID
Route::get('chercheInfoEnfantById/{idEnfant}', 'childDataController@chercheInfoEnfantById');
/*==============================================================*/
/* Route: GESTION DOCUM                         */
/*==============================================================*/




/*==============================================================*/
/* Route: ACCUEIL                                         */
/*==============================================================*/
			//************DEFAULT***************//


//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
