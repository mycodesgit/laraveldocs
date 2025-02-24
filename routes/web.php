<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('installation.home');
});


Route::get('/installation', [PagesController::class,'dash'])->name('dash');
Route::get('/timezone', [PagesController::class,'timezoneStore'])->name('timezoneStore');
Route::get('/environment', [PagesController::class,'environmentStore'])->name('environmentStore');
Route::get('/redirect', [PagesController::class,'redirectStore'])->name('redirectStore');
Route::get('/frontend', [PagesController::class,'bladefrontendStore'])->name('bladefrontendStore');
Route::get('/backend', [PagesController::class,'backendcontrolStore'])->name('backendcontrolStore');
Route::get('/web-routes', [PagesController::class,'routecontrolStore'])->name('routecontrolStore');
Route::get('/migration', [PagesController::class,'migrationStore'])->name('migrationStore');
Route::get('/eloquent ORM', [PagesController::class,'modelsStore'])->name('modelsStore');