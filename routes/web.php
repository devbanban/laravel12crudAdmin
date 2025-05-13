<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

 
Route::get('/',  [AdminController::class, 'list']);

//admins crud
Route::get('/admins',  [AdminController::class, 'list']);
Route::get('/admins/list',  [AdminController::class, 'list']);
Route::get('/admins/adding',  [AdminController::class, 'adding']);
Route::post('/admins',  [AdminController::class, 'create']);
Route::get('/admins/{id}',  [AdminController::class, 'edit']);
Route::put('/admins/{id}',  [AdminController::class, 'update']);
Route::delete('/admins/remove/{id}',  [AdminController::class, 'remove']);
Route::get('/admins/reset/{id}',  [AdminController::class, 'reset']);
Route::put('/admins/reset/{id}',  [AdminController::class, 'updatePwd']); 