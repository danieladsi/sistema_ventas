<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;

Route::get('/departments', [DepartmentController::class, 'index'])
    ->name('departments.index');

Route::get('/departments/create', [DepartmentController::class, 'create'])
    ->name('departments.create');

Route::post('/departments/create', [DepartmentController::class, 'store'])
    ->name('departments.create');

Route::get('/departments/create/{department}', [DepartmentController::class, 'edit'])
    ->name('departments.edit');

Route::post('/departments/create/{department}', [DepartmentController::class, 'update'])
    ->name('departments.edit');

Route::post('/departments/create/{department}', [DepartmentController::class, 'destroy'])
    ->name('departments.delete');


Route::get('/cities', [CityController::class, 'index'])
    ->name('cities.index');

Route::get('/cities/create', [CityController::class, 'create'])
    ->name('cities.create');

Route::post('/cities/create', [CityController::class, 'store'])
    ->name('cities.create');

Route::get('/cities/edit/{city}', [CityController::class, 'edit'])
    ->name('cities.edit');

Route::post('/cities/edit/{city}', [CityController::class, 'update'])
    ->name('cities.edit');

Route::get('/cities/edit/{city}', [CityController::class, 'destroy'])
    ->name('cities.delete');


Route::get('/', function () {
    return view('welcome');
});
