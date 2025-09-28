<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GroupController;
// Redirección inicial
Route::redirect('/', '/login');
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/stats', [DashboardController::class, 'stats'])->name('dashboard.stats');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/myaccount', [AccountController::class, 'index'])->name('account');
    // Gestión de usuarios (futuro - admin)
    Route::resource('users', UserController::class);
});



// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // My Groups
    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
    
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});