<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController; 
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

Route::get('admin/categories/{category}/delete', [CategoryController::class, 'delete'])
->name ('categories.delete'); 

Route::get('admin/projects/{project}/delete', [ProjectController::class, 'delete'])
->name ('projects.delete'); 

Route::resource('/admin/categories', CategoryController::class); 
Route::resource('/admin/projects', ProjectController::class); 

Route::get('/dashboard', function() {
    return view ('dashboard'); 

})->middleware(['auth'])->name('dashboard'); 


require __DIR__.'/auth.php'; 