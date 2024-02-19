<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employee', [EmployeesController::class, 'index'])->name('employee.index');
Route::get('/home', [EmployeesController::class, 'home'])->name('employee.home');
Route::get('/employee/add', [EmployeesController::class, 'add'])->name('employee.add');
Route::post('/employee', [EmployeesController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit', [EmployeesController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeesController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}/destroy', [EmployeesController::class, 'destroy'])->name('employee.destroy');