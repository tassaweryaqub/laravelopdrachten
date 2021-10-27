<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get( '/', [CategoryController::class, 'index' ]); 

//middle ware wrappen around the project controller met permissies voor teacher en admin om te verwijderen
Route ::group(['middleware' => ['role:|student|teacher|admin']], function(){

    Route::get('admin/projects/{project}/delete', [ProjectController::class, 'delete'])
    ->name ('projects.delete'); 

     Route::get('admin/products/{product}/delete', [ProductController::class, 'delete'])
    ->name ('products.delete'); 

    Route::get('admin/categories/{category}/delete', [CategoryController::class, 'delete'])
    ->name ('categories.delete'); 

    Route::get('admin/tasks/{task}/delete', [TaskController::class, 'delete'])
    ->name ('tasks.delete'); 



Route::resource('/admin/products', ProductController::class); 

Route::resource('/admin/projects', ProjectController::class); 

Route::resource('/admin/categories', CategoryController::class); 

Route::resource('/admin/tasks', TaskController::class); 



});




Route::get('/dashboard', function() {
    return view ('dashboard'); 

})->middleware(['auth'])->name('dashboard'); 


require __DIR__.'/auth.php'; 