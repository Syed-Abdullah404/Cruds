<?php

use App\Models\todoModel;
use App\Http\Controllers\todo;
use App\Http\Controllers\profiles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\showPostController;
use App\Http\Controllers\showAllPostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\EmployeesController;

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
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/dashboard', function () {

    // $todolist = todoModel::find();


    $todolist = todoModel::where('user_id', auth()->user()->id)->orderBy('completed')->get();
    // dd($todolist);
    return view('index', compact('todolist'));
})->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::get('/company', [AdminController::class, 'company'])->name('company');
// Route::get('/add', [AdminController::class, 'add'])->name('add');
// Route::post('/addCompany', [AdminController::class, 'addCompany'])->name('addCompany');
// Route::get('/company/edit/{id}', [AdminController::class, 'editCompany']);
// Route::post('/updateCompany', [AdminController::class, 'updateCompany'])->name('updateCompany');
// Route::delete('/deleteCompany/{id}', [AdminController::class, 'deleteCompany']);

// Route::get('/employee', [EmployeeController::class, 'employee']);
// Route::get('/addEmployee', [EmployeeController::class, 'addemployee']);
// Route::post('/addEmployeeData', [EmployeeController::class, 'addEmployeeData'])->name('addEmployeeData');
// Route::get('/employee/editEmployee/{id}', [EmployeeController::class, 'editEmployee'])->name('editEmployee');
// Route::post('/updateEmployee', [EmployeeController::class, 'updateEmployee'])->name('updateEmployee');
// Route::delete('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('deleteEmployee');
// Route::get('/profile', [profileController::class, 'indexProfile']);
// Route::post('/updateProfile', [profileController::class, 'updateProfile'])->name('updateProfile');
Route::resource('/company', CompanyController::class);
Route::resource('/employee', EmployeesController::class);
Route::post('/password', [profileController::class, 'password'])->name('password');
Route::resource('/profile', profiles::class);
Route::resource("/registers", registerController::class);
Route::resource("/todo", todo::class);
Route::post('/dasboard', [profileController::class, 'update'])->name('dashboard.update');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/post', PostController::class);
Route::resource('/postShow', showPostController::class);
Route::resource('/allpost', showAllPostController::class);
