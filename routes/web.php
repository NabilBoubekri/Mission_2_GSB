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
/*-------------------- Use case connexion---------------------------*/
//pdf
Route::get('generatePDF', [
    'as' => 'chemin_pdf',
    'uses' => 'visiteurController@pdf'
]);

Route::get('/', [
    'as' => 'chemin_connexion',
    'uses' => 'connexionController@connecter'
]);

Route::get('/', [
    'as' => 'chemin_test',
    'uses' => 'etatFraisController@test'
]);

Route::post('/', [
    'as' => 'chemin_valider',
    'uses' => 'connexionController@valider'
]);
Route::get('deconnexion', [
    'as' => 'chemin_deconnexion',
    'uses' => 'connexionController@deconnecter'
]);

/*-------------------- Use case état des frais---------------------------*/
Route::get('selectionMois', [
    'as' => 'chemin_selectionMois',
    'uses' => 'etatFraisController@selectionnerMois'
]);

Route::post('listeFrais', [
    'as' => 'chemin_listeFrais',
    'uses' => 'etatFraisController@voirFrais'
]);

/*-------------------- Use case gérer les frais---------------------------*/

Route::get('gererFrais', [
    'as' => 'chemin_gestionFrais',
    'uses' => 'gererFraisController@saisirFrais'
]);

Route::post('sauvegarderFrais', [
    'as' => 'chemin_sauvegardeFrais',
    'uses' => 'gererFraisController@sauvegarderFrais'
]);

Route::get('afficherVisiteurs', [
    'as' => 'chemin_listeVisiteurs',
    'uses' => 'visiteurController@afficherVisiteurs'
]);

Route::get('modifierVisiteurs', [
    'as' => 'chemin_modifierVisiteur',
    'uses' => 'visiteurController@modifierVisiteur'
]);

Route::get('modifierVisiteurs2', [
    'as' => 'chemin_modifierVisiteur2',
    'uses' => 'visiteurController@modifierVisiteur2'
]);

Route::get('supprimerVisiteur', [
    'as' => 'chemin_supprimerVisiteur',
    'uses' => 'visiteurController@suppVisi'
]);

Route::get('ajouterVisiteur', [
    'as' => 'chemin_ajouterVisiteur',
    'uses' => 'visiteurController@ajouterVisiteur'
]);

Route::get('ajouterVisiteur2', [
    'as' => 'chemin_ajouterVisiteur2',
    'uses' => 'visiteurController@ajouterVisiteur2'
]);
