<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employee/{id}/show', [EmployeeController::class, 'show'])->name('employee.show');
Route::post('/employee/{id}',[EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::patch('/employee/{id}',[EmployeeController::class, 'update'])->name('employee.update');
