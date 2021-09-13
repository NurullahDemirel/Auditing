<?php

use App\Http\Controllers\Audit\AuditController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'user','as'=>'user.'],function (){

    Route::middleware('auth')->group(function (){
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
    Route::get('/view',[UserController::class,'view'])->name('view');
    Route::get('/audits{id}',[AuditController::class,'index'])->name('audit');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
    Route::post('user/{id}',[UserController::class,'update'])->name('update');
   });
});
