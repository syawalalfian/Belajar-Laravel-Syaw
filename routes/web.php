<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ToDoController;

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
Route::view('/', 'template.master');

Route::view('/home', 'template.master');

Route::get('/data-table', [AkunController::class, 'index'])->name('indexAkun');
Route::get('/data-table/create', [AkunController::class, 'create'])->name('createAkun');

Route::get('/table', [AkunController::class, 'table'])->name('tableAkun');



// Route untuk uri /account
Route::get('/account', [AccountController::class, 'index']
)->name('indexAccount');

Route::get('/account/create', [AccountController::class, 'create']
)->name('createAccount');

Route::get('/account/show', [AccountController::class, 'show']
)->name('showAccount');

//route migrations
// route::get('/student', [SiswaController::class, 'index'])
// ->name('studentIndex');
// route::get('/student/create', [SiswaController::class, 'create'])
// ->name('studentCreate');
// route::post('/student', [SiswaController::class, 'store'])
// ->name('studentStore');
// route::get('/student/{id}', [SiswaController::class, 'show'])
// ->name('studentShow');
// route::get('/student/{id}/edit', [SiswaController::class, 'edit'])
// ->name('studentEdit');
// route::put('/student/{id}', [SiswaController::class, 'update'])
// ->nama('studentUpdate');
// route::delete('/student/{id}', [SiswaController::class, 'destroy'])
// ->nama('studentDestroyer');

// route::controller(SiswaController::class)->group(function(){
//     route::get('/student','index')->name('studentIndex');
//     route::get('/student/create','create')->name('studentCreate');
//     route::post('/student','store')->name('studentStore');
//     route::get('/student/{id}','show')->name('studentShow');
//     route::get('/student/{id}/edit','edit')->name('studentEdit');
//     route::put('/student/{id}','update')->name('studentUpdate');
//     route::delete('/student/{id}','destroy')->name('studentDestroy');
// });

route::resource('student',SiswaController::class);

route::resource('class',KelasController::class);

