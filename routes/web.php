<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferencielController;
use App\Http\Controllers\TypeController;
use App\Models\Formation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu;

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

Route::get('Menue',[Menu::class, 'Menue']);
Route::get('Menuef',[Menu::class, 'Menuef']);
Route::get('/', [TypeController::class, 'store'])->name('Accueil');
Route::get('/types/{id}', [TypeController::class, 'show'])->whereNumber('id');
Route::get('/referentiels/{id}', [ReferencielController::class, 'show'])->whereNumber('id');
Route::get('/formations/{id}', [FormationController::class,'show'])->whereNumber('id');
Route::post('/ajoute', [EtudiantController::class,'store']);
Route::get('/dashboard', [FormationController::class, 'canByfor']);
Route::get('/Formation_Par_Referentiel',[ReferencielController::class, 'forByRef']);
Route::get('/candidats_par_sexe',[EtudiantController::class,'repartitionParSexe']);
Route::get('/Tranche_age', [EtudiantController::class, 'trancheAge']);
Route::get('/gestion', [EtudiantController::class, 'gestion']);
Route::post('/ajout_referentielle', [TypeController::class,'stores']);
Route::get('/ajout_referentiel', [TypeController::class, 'ajout_referentiel']);
Route::post('/ajout_formations', [ReferencielController::class,'stores']);
Route::get('/ajout_formation', [ReferencielController::class, 'ajout_formation']);



Route::get('/all_candidats', [EtudiantController::class, 'all_candidats']);

Route::delete('/delete_candidats/{id}','App\Http\Controllers\EtudiantController@destroy')->name('delete_candidats');


Route::get('/fortype', [FormationController::class, 'ForByType']);

Route::get('/statistformation', [FormationController::class, 'afficherStatistiquesFormations']);

