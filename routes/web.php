<?php

use App\Http\Controllers\Homecontroller;
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

Route::get('/', [Homecontroller::class, 'index']);
Route::post('/', [Homecontroller::class, 'sendmail']);
Route::get('/login', [Homecontroller::class, 'login']);
Route::post('/login', [Homecontroller::class, 'customRegistration']);
Route::get('/view/{id}', [Homecontroller::class, 'viewc']);
Route::get('/view-club/{id}', [Homecontroller::class, 'viewclub']);


Route::get('signout', [Homecontroller::class, 'signOut'])->name('signout')->middleware('admin');
Route::get('/addgallary', [Homecontroller::class, 'addgallary'])->name('addgallary')->middleware('admin');
Route::post('/addgallary', [Homecontroller::class, 'addimage'])->name('addimage')->middleware('admin');
Route::get('/edit-club', [Homecontroller::class, 'editclub'])->name('addimage')->middleware('admin');
Route::get('/admin', [Homecontroller::class, 'adminpage'])->name('adminpage')->middleware('admin');
// Route::get('/efit', [Homecontroller::class, 'adminpage'])->name('adminpage');
Route::POST('/edit-competation/{id}', [HomeController::class, 'editcompet'])->middleware('admin');
Route::POST('/competation-update/{id}', [App\Http\Controllers\HomeController::class, 'update_info'])->name('user.update_info')->middleware('admin');
Route::get('/addevent', [App\Http\Controllers\HomeController::class, 'addevent'])->name('addevent')->middleware('admin');
Route::post('/add-events', [App\Http\Controllers\HomeController::class, 'addeventpost'])->name('addeventpost')->middleware('admin');