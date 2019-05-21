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

Route::get('/ajouter_voiture', function () {
    return view('ajouter_voiture');
})->name("ajouter_voiture");


/*
Route::get('/ajouter_modelle', function () {
    return view('ajouter_modelle');
})->name("ajouter_modelle");
*/
Route::get('ajouter_modelle',[
    'uses' => 'ModelleController@create',
    'as' => 'ajouter_modelle'
]);
Route::get('/ajouter_marque', function () {
    return view('ajouter_marque');
})->name("ajouter_marque");


Route::get('/ajouter_categorie', function () {
 return view('ajouter_categorie');
})->name("ajouter_categorie");
Route::get('/ajouter_assurence', function () {
    return view('ajouter_assurence');
})->name("ajouter_assurence");


Route::get('/ajouter_agence_assurence', function () {
    return view('ajouter_agence_assurence');
})->name("ajouter_agence_assurence");



Route::get('/ajouter_fournisseur', function () {
    return view('ajouter_fournisseur');
})->name("ajouter_fournisseur");


Route::get('/ajouter_contart_propriete', function () {
    return view('ajouter_contart_propriete');
})->name("ajouter_contart_propriete");

Route::get('/ajouter_contart_location', function () {
    return view('ajouter_contart_location');
})->name("ajouter_contart_location");
/*
Route::get('/ajouter_contart_assurence', function () {
    return view('ajouter_contart_assurence');
})->name("ajouter_contart_assurence");*/

//fonction 
Route::get('/', function () {
    return view('ajouter_categorie');
});

Route::get('voiture/search',[
    'uses' => 'VoituresController@search',
    'as' => 'voiture.search'
]);

Route::get('table_fournisseurs',[
    'uses' => 'FournisseursController@index',
    'as' => 'table_fournisseurs'
]);
Route::get('create',[
    'uses' => 'FournisseursController@create',
    'as' => 'fournisseur.create'
]);
Route::post('fournisseur/store',[
    'uses' => 'FournisseursController@store',
    'as' => 'fournisseur.store'
]);
Route::post('search',[
    'uses' => 'FournisseursController@search',
    'as' => 'fournisseur.search'
]);
Route::get('supprimer_fournisseurs/{id}',[
    'uses' => 'FournisseursController@destroy',
    'as' => 'supprimer_fournisseurs'
]);

Route::post('update_fournisseur/{id}',[
    'uses' => 'FournisseursController@update',
    'as' => 'update_fournisseur'
]);
Route::get('/editer_fournisseurs/{id}',[
    'uses' => 'FournisseursController@edit',
    'as' => 'editer_fournisseurs'
]);


//assurence

Route::get('table_assurences',[
    'uses' => 'AssurencesController@index',
    'as' => 'table_assurences'
]);
Route::get('create',[
    'uses' => 'AssurencesController@create',
    'as' => 'assurence.create'
]);
Route::post('assurence/store',[
    'uses' => 'AssurencesController@store',
    'as' => 'assurence.store'
]);
Route::post('search',[
    'uses' => 'AssurencesController@search',
    'as' => 'assurence.search'
]);
// lazem id bech ya3ref wech ysuprrimi
Route::get('supprimer_assurences/{id}',[
    'uses' => 'AssurencesController@destroy',
    'as' => 'supprimer_assurences'
]);

Route::post('update_assurence/{id}',[
    'uses' => 'AssurencesController@update',
    'as' => 'update_assurence'
]);
Route::get('assurence/editer_assurences/{id}',[
    'uses' => 'AssurencesController@edit',
    'as' => 'editer_assurences'
]);

//categorie
Route::get('table_categories',[
    'uses' => 'CategoriesController@index',
    'as' => 'table_categories'
]);
Route::get('create',[
    'uses' => 'CategoriesController@create',
    'as' => 'categorie.create'
]);
Route::post('categorie/store',[
    'uses' => 'CategoriesController@store',
    'as' => 'categorie.store'
]);


//marque
Route::get('table_marques',[
    'uses' => 'MarquesController@index',
    'as' => 'table_marques'
]);
Route::get('create',[
    'uses' => 'MarquesController@create',
    'as' => 'marque.create'
]);
Route::post('marque/store',[
    'uses' => 'MarquesController@store',
    'as' => 'marque.store'
]);


//modelle
Route::get('table_modelles',[
    'uses' => 'ModelleController@index',
    'as' => 'table_modelles'
]);
Route::get('ajouter_modelle',[
    'uses' => 'ModelleController@create',
    'as' => 'ajouter_modelle'
]);

Route::post('modelle/store',[
    'uses' => 'ModelleController@store',
    'as' => 'modelle.store'
]);


Route::get('supprimer_modelle/{id}',[
    'uses' => 'ModelleController@destroy',
    'as' => 'supprimer_modelle'
]);

Route::post('update_modelle/{id}',[
    'uses' => 'ModelleController@update',
    'as' => 'update_modelle'
]);
Route::get('/editer_assurences/{id}',[
    'uses' => 'ModelleController@edit',
    'as' => 'editer_modelles'
]);

//voiture 
Route::get('ajouter_voiture',[
    'uses' => 'VoituresController@create',
    'as' => 'ajouter_voiture'
]);

Route::post('voiture/store',[
    'uses' => 'VoituresController@store',
    'as' => 'voiture.store'
]);


Route::get('supprimer_voiture/{id}',[
    'uses' => 'VoituresController@destroy',
    'as' => 'supprimer_voiture'
]);

Route::post('update_voiture/{id}',[
    'uses' => 'VoituresController@update',
    'as' => 'update_voiture'
]);
Route::get('/editer_assurences/{id}',[
    'uses' => 'VoituresController@edit',
    'as' => 'editer_voitures'
]);


Route::get('table_voitures',[
    'uses' => 'VoituresController@index',
    'as' => 'table_voitures'
]);


Route::get('table_voitures',[
    'uses' => 'VoituresController@index',
    'as' => 'table_voitures'
]);


Route::get('/detais_voiture/{id}',[
    'uses' => 'VoituresController@index2',
    'as' => 'detais_voiture'
]);


//contrat assurence


Route::get('table_contrat_assurences',[
    'uses' => 'Contrat_assurencesController@index',
    'as' => 'table_contrat_assurences'
]);
Route::get('/ajouter_contart_assurence',[
    'uses' => 'Contrat_assurencesController@create',
    'as' => 'ajouter_contrat_assurence'
]);

Route::post('contrat_assurence/store',[
    'uses' => 'Contrat_assurencesController@store',
    'as' => 'contrat_assurence.store'
]);


Route::get('supprimer_contrat_assurence/{id}',[
    'uses' => 'Contrat_assurencesController@destroy',
    'as' => 'supprimer_contrat_assurence'
]);

Route::post('update_contrat_assurence/{id}',[
    'uses' => 'Contrat_assurencesController@update',
    'as' => 'update_contrat_assurence'
]);
Route::get('/editer_contrat_assurences/{id}',[
    'uses' => 'Contrat_assurencesController@edit',
    'as' => 'editer_contrat_assurences'
]);
/// contrat location 

Route::get('table_contrat_locations',[
    'uses' => 'Contrat_assurencesController@index',
    'as' => 'table_contrat_locations'
]);
Route::get('ajouter_contrat_location',[
    'uses' => 'Contrat_locationsController@create',
    'as' => 'ajouter_contrat_location'
]);

Route::post('contrat_location/store',[
    'uses' => 'Contrat_locationsController@store',
    'as' => 'contrat_location.store'
]);


Route::get('supprimer_contrat_location/{id}',[
    'uses' => 'Contrat_assurencesController@destroy',
    'as' => 'supprimer_contrat_location'
]);

Route::post('update_contrat_location/{id}',[
    'uses' => 'Contrat_assurencesController@update',
    'as' => 'update_contrat_location'
]);
Route::get('/editer_contrat_locations/{id}',[
    'uses' => 'Contrat_assurencesController@edit',
    'as' => 'editer_contrat_locations'
]);



/// contrat propriete

Route::get('table_contrat_proprietes',[
    'uses' => 'Contrat_assurencesController@index',
    'as' => 'table_contrat_proprietes'
]);
Route::get('ajouter_contrat_propriete',[
    'uses' => 'Contrat_locationsController@create',
    'as' => 'ajouter_contrat_propriete'
]);

Route::post('contrat_propriete/store',[
    'uses' => 'Contrat_proprietesController@store',
    'as' => 'contrat_propriete.store'
]);


Route::get('supprimer_contrat_propriete/{id}',[
    'uses' => 'Contrat_assurencesController@destroy',
    'as' => 'supprimer_contrat_propriete'
]);

Route::post('update_contrat_propriete/{id}',[
    'uses' => 'Contrat_assurencesController@update',
    'as' => 'update_contrat_propriete'
]);
Route::get('/editer_contrat_proprietes/{id}',[
    'uses' => 'Contrat_assurencesController@edit',
    'as' => 'editer_contrat_proprietes'
]);