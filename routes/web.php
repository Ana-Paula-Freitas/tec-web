<?php
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/novo/', function() {
    return view('novo');
});

Route::get('/usuarios', [UserController::class, 'index']);

require __DIR__.'/settings.php';

Route::resource('users', UserController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('courses', CourseController::class);