<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

//oute::resource('employees', EmployeeController::class);
Route::get('employees', [EmployeeController::class,'index'])->name('employees.index');
Route::post('employees', [EmployeeController::class,'store'])->name('employees.store');
Route::get('employees/create', [EmployeeController::class,'create'])->name('employees.create');
Route::get('employees/{employee}', [EmployeeController::class,'show'])->name('employees.show');
Route::put('employees/{employee}', [EmployeeController::class,'update'])->name('employees.update');
Route::delete('employees/{employee}', [EmployeeController::class,'destroy'])->name('employees.destroy');
Route::get('employees/{employee}/edit', [EmployeeController::class,'edit'])->name('employees.edit');