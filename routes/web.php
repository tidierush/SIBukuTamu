<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserFeedbackController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home.index');

//for user feedback route
Route::get('/user', [PublicController::class, 'index'])->name('public.index');
Route::get('/user/feedback', [PublicController::class, 'feedback'])->name('public.feedback');
Route::post('/user/feedback', [PublicController::class, 'storeFeedback'])->name('public.storeFeedback');
Route::get('/user/feedback/done', [PublicController::class, 'doneStoreFeedback'])->name('public.doneStoreFeedback');

// login route
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authLoginAttempt'])->middleware('guest')->name('adminlogin.store');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.store');

// guest routes
Route::get('/guests', [GuestController::class, 'index'])->middleware('auth')->name('guest.index');
Route::get('/guests/create', [GuestController::class, 'create'])->middleware('auth')->name('guest.create');
Route::post('/guests', [GuestController::class, 'store'])->middleware('auth')->name('guest.store');
Route::get('/guests/{guest}/edit', [GuestController::class, 'edit'])->middleware('auth')->name('guest.edit');
Route::put('/guests/{guest}', [GuestController::class, 'update'])->middleware('auth')->name('guest.update');
Route::delete('/guests/{guest}', [GuestController::class, 'destroy'])->middleware('auth')->name('guest.destroy');

// guestbook routes
Route::get('/guest-books', [GuestBookController::class, 'index'])->middleware('auth')->name('guestBook.index');
Route::get('/guest-books/create', [GuestBookController::class, 'create'])->middleware('auth')->name('guestBook.create');
Route::post('/guest-books', [GuestBookController::class, 'store'])->middleware('auth')->name('guestBook.store');
Route::get('/guest-books/{guestBook}/edit', [GuestBookController::class, 'edit'])->middleware('auth')->name('guestBook.edit');
Route::put('/guest-books/{guestBook}', [GuestBookController::class, 'update'])->middleware('auth')->name('guestBook.update');
Route::delete('/guest-books/{guestBook}', [GuestBookController::class, 'destroy'])->middleware('auth')->name('guestBook.destroy');

// feedback routes
Route::get('/feed-back', [FeedbackController::class, 'index'])->middleware('auth')->name('feedback.index');
Route::get('/feed-back/create', [FeedbackController::class, 'create'])->middleware('auth')->name('feedback.create');
Route::post('/feed-back', [FeedbackController::class, 'store'])->middleware('auth')->name('feedback.store');
Route::get('/feed-back/{feedback}/edit', [FeedbackController::class, 'edit'])->middleware('auth')->name('feedback.edit');
Route::put('/feed-back/{feedback}', [FeedbackController::class, 'update'])->middleware('auth')->name('feedback.update');
Route::delete('/feed-back/{feedback}', [FeedbackController::class, 'destroy'])->middleware('auth')->name('feedback.destroy');

// print section
Route::get('/guest-report', [ReportController::class, 'guest'])->middleware('auth')->name('report.guest');
Route::get('/guestbook-report', [ReportController::class, 'guestBook'])->middleware('auth')->name('report.guestbook');
Route::get('/feedback-report', [ReportController::class, 'feedback'])->middleware('auth')->name('report.feedback');
Route::get('/performance-report', [ReportController::class, 'performance'])->middleware('auth')->name('report.performance');
Route::get('/feedbackperformance-report', [ReportController::class, 'feedbackPerformance'])->middleware('auth')->name('report.feedbackperformance');
