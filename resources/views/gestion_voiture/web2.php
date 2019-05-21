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

Route::get('/gestion_voiture/ajouter_voiture', function () {
    return view('gestion_voiture.ajouter_voiture');
})->name("ajouter_voiture");
Route::get('/gestion_voiture/ajouter_modelle', function () {
    return view('gestion_voiture.ajouter_modelle');
})->name("ajouter_modelle");

Route::get('/gestion_voiture/ajouter_marque', function () {
    return view('gestion_voiture.ajouter_marque');
})->name("ajouter_marque");


Route::get('/gestion_voiture/ajouter_categorie', function () {
 return view('gestion_voiture.ajouter_categorie');
})->name("ajouter_categorie");
Route::get('/gestion_voiture/ajouter_assurence', function () {
    return view('gestion_voiture.ajouter_assurence');
})->name("ajouter_assurence");

Route::get('/gestion_voiture/ajouter_fournisseur', function () {
    return view('gestion_voiture.ajouter_fournisseur');
})->name("ajouter_fournisseur");


Route::get('/gestion_voiture/ajouter_contart_propriete', function () {
    return view('gestion_voiture.ajouter_contart_propriete');
})->name("ajouter_contart_propriete");

Route::get('/gestion_voiture/ajouter_contart_location', function () {
    return view('gestion_voiture.ajouter_contart_location');
})->name("ajouter_contart_location");

Route::get('/gestion_voiture/ajouter_contart_assurence', function () {
    return view('gestion_voiture.ajouter_contart_assurence');
})->name("ajouter_contart_assurence");

//fonction 
Route::get('/', function () {
    return view('gestion_voiture.ajouter_categorie');
});
