<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenulistController;
use App\Http\Controllers\MenuController;


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
    return view('auth.app-login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/menulist', [MenulistController::class, 'index'])->middleware(['auth'])->name('menulist');
Route::get('/dashboard', [MenulistController::class, 'table'])->middleware(['auth'])->name('dashboard');


//menu
Route::get('/menu/table', [MenuController::class, 'table'])->middleware(['auth'])->name('data.table');
Route::get('/menu/deactive/{id}', [MenuController::class, 'deactive'])->middleware(['auth'])->name('menu.deactive');
Route::get('/menu/active/{id}', [MenuController::class, 'active'])->middleware(['auth'])->name('menu.active');
Route::get('/menu/delete/{id}', [MenuController::class, 'delete'])->middleware(['auth'])->name('menu.delete');
Route::get('/menu/create', function () {return view('admin.menu.create');})->middleware(['auth'])->name('menu.create');
Route::get('/menu/create1', [MenuController::class, 'create1'])->middleware(['auth'])->name('data.create1');
Route::post('/image/create', ['as' => '/menu/create', 'uses' => 'App\Http\Controllers\ImageController@create']);
Route::post('/image/post', ['as' => '/menu/post', 'uses' => 'App\Http\Controllers\ImageController@post']);

Route::post('/menu/addmenu', ['as' => '/menu/addmenu', 'uses' => 'App\Http\Controllers\MenuController@addmenu']);
Route::post('/menu/next1', ['as' => '/menu/next1', 'uses' => 'App\Http\Controllers\MenuController@next1']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->middleware(['auth'])->name('menu.edit');
Route::post('/menu/update', ['as' => '/menu/update/', 'uses' => 'App\Http\Controllers\MenuController@update']);




require __DIR__.'/auth.php';
