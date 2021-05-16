<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/me/profilo', [HomeController::class, 'profilo'])->name('me.profilo');
Route::post('/mail/send', [ContactController::class, 'send'])->name('mail.send'); 
Route::get('/mail/contact', [ContactController::class, 'inviamail'])->name('mail.contact'); 
Route::get('/siti/vetrina', [HomeController::class, 'sitiVetrina'])->name('siti.vetrina'); 
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store'); 
Route::get('/project/{project}/show', [ProjectController::class, 'show'])->name('project.show'); 
Route::get('/admin/profile', [AdminController::class, 'dashboard'])->name('admin.profile'); 
Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit'); 
Route::delete('project/{project}/delete', [ProjectController::class, 'destroy'])->name('project.delete'); 
Route::post('project/{project}/update', [ProjectController::class, 'update'])->name('project.update'); 
Route::get('/project/weather', [HomeController::class, 'weather'])->name('project.weather'); 
Route::post('/locale/{locale}', [HomeController::class, 'locale'])->name('locale');

