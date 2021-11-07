<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashbardController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminDashbardController::class, 'dashboard'])->name('dashboard');

Route::get('/', [AdminDashbardController::class,'home']);
Route::get('join', [AdminDashbardController::class,'join']);
Route::get('course/{id}', [AdminDashbardController::class,'course']);

Route::get('admin-instructors-view', [AdminDashbardController::class,'instructors_view']);
Route::get('admin-instructor-add', [AdminDashbardController::class,'instructor_view']);
Route::post('admin-instructor-add', [AdminDashbardController::class,'instructor_add']);

Route::get('admin-enquiries-view', [AdminDashbardController::class,'enquiries_view']);
Route::get('admin-enquiry-add', [AdminDashbardController::class,'enquiry_view']);
Route::post('admin-enquiry-add', [AdminDashbardController::class,'enquiry_add']);

Route::get('admin-categories-view', [AdminDashbardController::class,'categories_view']);
Route::get('admin-category-add', [AdminDashbardController::class,'category_view']);
Route::post('admin-category-add', [AdminDashbardController::class,'category_add']);

Route::get('admin-courses-view', [AdminDashbardController::class,'courses_view']);
Route::get('admin-course-add', [AdminDashbardController::class,'course_view']);
Route::post('admin-course-add', [AdminDashbardController::class,'course_add']);

Route::get('admin-technologies-view', [AdminDashbardController::class,'technologies_view']);
Route::get('admin-technology-add', [AdminDashbardController::class,'technology_view']);
Route::post('admin-technology-add', [AdminDashbardController::class,'technology_add']);

Route::get('admin-payments-view', [AdminDashbardController::class,'payments_view']);
Route::get('admin-payment-add', [AdminDashbardController::class,'payment_view']);
Route::post('admin-payment-add', [AdminDashbardController::class,'payment_add']);
Route::post('admin-payment-enquiry', [AdminDashbardController::class,'payment_enquiry']);

Route::get('admin-settings', [AdminDashbardController::class,'settings']);

Route::post('guest-enquiry-add', [AdminDashbardController::class,'guest_enquiry_add']);
