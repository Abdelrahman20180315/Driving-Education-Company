<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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




Route::middleware(['admin'])->group(function()
{
    Route::get('/viewbooks',[AdminController::class , 'viewbooks']);
    Route::get('/viewalltrainers',[AdminController::class , 'viewalltrainers']);
    Route::post('/SaveCity',[AdminController::class , 'SaveCity']);
    Route::get('/ShowContactMessages',[AdminController::class , 'ShowContactMessages']);
    Route::get('/AddCitystation',[AdminController::class , 'AddCitystation']);
    Route::post('/SaveCitystation',[AdminController::class , 'SaveCitystation']);
    Route::get('/AddCity',[AdminController::class , 'AddCity'])->middleware('admin');
    Route::get('/Allusers',[AdminController::class , 'showusers']);
    Route::get('/delettrainer/{id}',[AdminController::class , 'delettrainer']);
    Route::get('/viewallcitystation',[AdminController::class , 'viewallcitystation']);
    Route::get('/deletstation/{id}',[AdminController::class , 'deletstation']);


});


Route::get('/redirect',[HomeController::class , 'redirect']);

Route::middleware(['user'])->group(function()
{
    
// Route::get('/admin', function () {
//     return view('admin.adminhome');
// });
Route::get('/',[HomeController::class , 'home'] );
Route::get('/about',[HomeController::class , 'about']);
Route::get('/contact',[HomeController::class , 'contact']);
Route::get('/trainers',[HomeController::class , 'trainers'])->middleware('Trainning');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/SendMessage',[HomeController::class , 'SendMessage']);

Route::get('/joinastrainer_1',[HomeController::class , 'joinastrainer_1']);
Route::get('/joinastrainer_2',[HomeController::class , 'joinastrainer_2']);
Route::get('/joinastrainer_3',[HomeController::class , 'joinastrainer_3']);
Route::get('/joinastrainer_4',[HomeController::class , 'joinastrainer_4']);
Route::post('/saveuserastrainer',[HomeController::class , 'saveuserastrainer']);
Route::get('/showtrainerbyuser',[HomeController::class , 'showtrainerbyuser']);
Route::get('/mytrainerpage',[HomeController::class , 'mytrainerpage']);
Route::post('/bookcourse/{id}',[HomeController::class , 'book_a_course']);
Route::get('/user_course',[HomeController::class , 'user_course']);
Route::get('/deletcourse/{id}',[HomeController::class , 'deletcourse']);
Route::get('/questions',[HomeController::class , 'questions']);
Route::get('/search',[HomeController::class , 'search']);

});

