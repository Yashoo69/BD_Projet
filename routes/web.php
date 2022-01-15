<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\AuthentificationController;

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


Route::get('/', [NavController::class, 'home']);
Route::get('listCharacter', [NavController::class, 'listCharacter']);
Route::get('characterDetail/{id}', [NavController::class, 'characterDetail']); 
Route::get('addCharacter', [NavController::class, 'addCharacter'])->middleware('isLoggedIn');
Route::get('updateCharacter/{id}', [NavController::class, 'updateCharacter'])->middleware('isLoggedIn');
Route::post('addCharacterBdd', [ActionController::class, 'addCharacterBdd'])->middleware('isLoggedIn');
Route::post('editCharacter', [ActionController::class, 'editCharacter'])->middleware('isLoggedIn');
Route::post('deleteCharacter', [ActionController::class, 'deleteCharacter'])->middleware('isLoggedIn');

Route::get('listDrawer', [NavController::class, 'listDrawer']);
Route::get('drawerDetail/{id}', [NavController::class, 'drawerDetail']); 
Route::get('addDrawer', [NavController::class, 'addDrawer'])->middleware('isLoggedIn');
Route::get('updateDrawer/{id}', [NavController::class, 'updateDrawer'])->middleware('isLoggedIn');
Route::post('addDrawerBdd', [ActionController::class, 'addDrawerBdd'])->middleware('isLoggedIn');
Route::post('editDrawer', [ActionController::class, 'editDrawer'])->middleware('isLoggedIn');
Route::post('deleteDrawer', [ActionController::class, 'deleteDrawer'])->middleware('isLoggedIn');


Route::get('login' , [AuthentificationController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('registration' , [AuthentificationController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('register-user', [AuthentificationController::class, 'registerUser'])->name('register-user');
Route::post('login-user' , [AuthentificationController::class, 'loginUser'])->name('login-user');
Route::get('dashboard' , [AuthentificationController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('logout' , [AuthentificationController::class, 'logout']);

