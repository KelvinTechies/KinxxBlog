<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PostController;
use App\Models;
use App\Http\Controllers\blogController;
use App\Models\categoriesModel;
use App\Http\Controllers\catgoriesController;
// use Illuminate\Auth\SessionGuard;

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

Route::get('/',  [blogController::class, 'index']);

// show reg page
Route::get('/register', [AdminController::class, 'register']);
// show Login page
Route::get('/login', [AdminController::class, 'login']);

Route::get('/index', [blogController::class, 'index']);
Route::get('/contact', [blogController::class, 'contact']);
Route::get('/blog/{id}', [blogController::class, 'blog']);
Route::get('/categories/{id}', [blogController::class, 'categories']);
// Route::get('/categories/{id}', [blogController::class, 'edit']);
Route::get('/sports', [blogController::class, 'sports']);

// Update Admin Details
Route::put('/update_ad/{id}', [AdminController::class, 'Update']);

// Route::get('/dashboard', [PostController::class, 'Dashboard']);

// Validate Categoy Comment

Route::post('/cat_comm/{id}', [blogController::class, 'cat_comm']);

// Update Posts
Route::put('/update/{id}', [PostController::class, 'update']);
// Validate Reg Page
Route::post('/login', [AdminController::class, 'ValidateRegistrationPage']);

// MiddleWaare

Route::group(['middleware'=>['AuthCheck']], function(){
// You are entitled to the dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard']);
// Edit yhur profile
Route::get('/edit/{id}', [AdminController::class, 'Edit']);
// Show Content Form
Route::get('/add_content', [PostController::class, 'create']);

Route::get('/logout', [AdminController::class, 'LogOut']);
// View posts table
Route::get('/viewposts', [PostController::class, 'index']);
//Add Sports Content

Route::get('/add_content_sports', [catgoriesController::class, 'create']);
// Edit Posts
Route::get('{id}/edit', [PostController::class, 'edit']);

// Delete Posts
Route::delete('del/{id}', [PostController::class, 'destroy']);



// Validate the categoryController

Route::post('/categoryValidation', [catgoriesController::class, 'store']);


// Delete Category Items
Route::delete('delete/{id}', [catgoriesController::class, 'destroy_cat']);


});


// Validate content Form
Route::post('/val', [PostController::class, 'store']);


// Validate Comment Form

Route::post('/comments/{id}', [PostController::class, 'comments']);
// show category Tables

Route::get('/viewtables', [catgoriesController::class, 'viewTables']);

// show category edit table

Route::get('/{id}/edit_cat', [catgoriesController::class, 'edit']);

// Update category items

Route::put('/updated/{id}', [catgoriesController::class, 'updateCat']);
// Validate Login Page
Route::post('/dashboard', [AdminController::class, 'LogIneRegistrationPage']);
