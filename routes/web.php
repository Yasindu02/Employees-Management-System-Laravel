<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [AuthController::class, 'register'])->name('register');  // GET route
Route::post('/register', [AuthController::class, 'registerpost']);  // POST route
Route::get('/login', [AuthController::class, 'login'])->name('login'); 
Route::post('/login', [AuthController::class, 'loginpost']); 

//Route::get('/home', [HomeController::class, 'index']); 
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout'); 

Route::get('/add', [EmployeeController::class, 'add'])->name('add'); 
Route::post('/add', [EmployeeController::class, 'addpost']);        // add the new employee

// Route::get('/all', [EmployeeController::class, 'all'])->name('all'); 

//Route::get('/index', [HomeController::class,'all']);
Route::get('/index', [HomeController::class, 'indexx'])->name('index'); // Route for displaying all employee details

Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit'); 
//Route::post('/edit', [EmployeeController::class, 'editpost']);


//Route::post('/employee/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
//Route::get('/delete', [EmployeeController::class,'delete'])->name('delete'); 