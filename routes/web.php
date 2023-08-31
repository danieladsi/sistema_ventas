<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CategoryController;

//departments

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

//city

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

Route::post('/cities/edit/{city}', [CityController::class, 'destroy'])
    ->name('cities.delete');

//categories

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

Route::get('/categories/edit/{Category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::post('/categories/edit/{Category}', [CategoryController::class, 'update'])
    ->name('categories.edit');

Route::post('/categories/edit/{Category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');






Route::get('/', function () {
    return view('welcome');
});
