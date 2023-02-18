<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CoordonneeController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\FormationController;
use App\Http\Controllers\Api\LangueController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\ReferentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
});

Route::controller(ExperienceController::class)->group(function(){
    Route::post('add_experience','add_experience');
    Route::get('get_all_experience','get_all_experience');
    Route::get('edit_experience/{id}','edit_experience');
    Route::post('update_experience/{id}','update_experience');
    Route::delete('delete_experience/{id}','delete_experience');

});

Route::controller(FormationController::class)->group(function(){
    Route::post('add_formation','add_formation');
    Route::get('get_all_formation','get_all_formation');
    Route::get('edit_formation/{id}','edit_formation');
    Route::post('update_formation/{id}','update_formation');
    Route::delete('delete_formation/{id}','delete_formation');
});

Route::controller(LangueController::class)->group(function(){
    Route::post('add_langue','add_langue');
    Route::get('get_all_formation','get_all_formation');
    Route::get('edit_langue/{id}','edit_langue');
    Route::post('update_langue/{id}','update_langue');
    Route::delete('delete_langue/{id}','delete_langue');
});

Route::controller(CoordonneeController::class)->group(function(){
    Route::post('add_coordonnee','add_coordonnee');
    Route::get('get_all_coordonnee','get_all_coordonnee');
    Route::get('edit_coordonnee/{id}','edit_coordonnee');
    Route::post('update_coordonnee/{id}','update_coordonnee');
    Route::delete('delete_coordonnee/{id}','delete_coordonnee');
});

Route::controller(ReferentController::class)->group(function(){
    Route::post('add_referent','add_referent');
    Route::get('get_all_referent','get_all_referent');
    Route::get('edit_referent/{id}','edit_referent');
    Route::post('update_referent/{id}','update_referent');
    Route::delete('delete_referent/{id}','delete_referent');
});

Route::controller(PublicationController::class)->group(function(){
    Route::get('get_all_publication','get_all_publication');
    Route::post('add_publication','add_publication');
    Route::get('edit_publication/{id}','edit_publication');
    Route::post('update_publication/{id}','update_publication');
    Route::delete('delete_publication/{id}','delete_publication');
});


