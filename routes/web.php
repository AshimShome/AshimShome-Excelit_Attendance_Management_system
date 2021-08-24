<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;


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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// this route for home dashboard
Route::get('redirects',[HomeController::class,'index'])->name('redirects')->middleware('IsActive');
// this route for home logout
Route::get('logout',[HomeController::class,'logout'])->name('logout')->middleware('IsActive');

// this route for home manage-employee
Route::get('/employee',[EmployeeController::class,'index'])->name('manage-employee')->middleware('IsActive');
Route::get('/add-employee',[EmployeeController::class,'create'])->name('add-employee')->middleware('IsActive');
Route::post('/save-employee',[EmployeeController::class,'store'])->name('store-employee')->middleware('IsActive');
Route::get('/edit-employee/{id}',[EmployeeController::class,'edit'])->name('edit-employee')->middleware('IsActive');
Route::post('/update-employee/{id}',[EmployeeController::class,'update'])->name('update-employee')->middleware('IsActive');
Route::get('/delete-employee/{id}',[EmployeeController::class,'destroy'])->name('delete-employee')->middleware('IsActive');


// this route for home user
Route::get('user',[AdminController::class,'user'])->name('user')->middleware('IsActive');
Route::get('addUserForm',[AdminController::class,'addUserForm'])->name('addUserForm')->middleware('IsActive');
Route::post('storeUser',[AdminController::class,'StoreUser'])->name('storeUser')->middleware('IsActive');
Route::get('/editUser/{id}',[AdminController::class,'EditUser'])->name('editUser')->middleware('IsActive');
Route::post('/updateUser/{id}',[AdminController::class,'updateUser'])->name('updateUser')->middleware('IsActive');
Route::get('/deleteUser/{id}',[AdminController::class,'deleteUser'])->name('deleteUser')->middleware('IsActive');
Route::get('/inactiveUser/{id}', [AdminController::class,'inactive'])->name('inactive')->middleware('IsActive');
Route::get('/activeUser/{id}', [AdminController::class,'active'])->name('active')->middleware('IsActive');



// Profile  & Change passsword Route
Route::get('/profile',[AdminController::class,'edit_profile'])->name('profile')->middleware('IsActive');
Route::post('/update-profile',[AdminController::class,'update_profile'])->name('update-profile')->middleware('IsActive');
Route::get('/reset-password',[AdminController::class,'reset_password'])->name('reset-password')->middleware('IsActive');
Route::post('/update-password',[AdminController::class,'update_password'])->name('update-password')->middleware('IsActive');

// Attendance manage Route
Route::get('/add-attendance',[AttendanceController::class,'attendance_index'])->name('attendance_index')->middleware('IsActive');

Route::get('/present/{id}', [AttendanceController::class,'present'])->name('present')->middleware('IsActive');
Route::get('/absent/{id}', [AttendanceController::class,'absent'])->name('absent')->middleware('IsActive');
Route::get('/leave/{id}', [AttendanceController::class,'leave'])->name('leave')->middleware('IsActive');
Route::get('/offday/{id}', [AttendanceController::class,'offday'])->name('offday')->middleware('IsActive');
Route::post('/store',[AttendanceController::class,'store'])->name('store')->middleware('IsActive');
