<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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


Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
 
    Route::get('/admin/perfil',[SiteController::class, 'perfil'])->name('perfil.page');
    Route::get('/admin/perfil/editar',[SiteController::class, 'EditarPerfil'])->name('perfil.editar');
    Route::get('/admin/table/users',[SiteController::class, 'TabelaShow'])->name('tabela.Show');


});



Route::get('/',[SiteController::class, 'index'])->name('index');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
