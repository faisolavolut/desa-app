<?php

use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;
use App\Http\Middleware\CheckAdminRole;
use App\Http\Middleware\CheckInvestorRole;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SupportController;
use App\Filament\Pages\Dashboard;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/session-login', [LoginController::class, 'showLoginForm'])->name('session-login.form');
Route::post('/session-login', [LoginController::class, 'login'])->name('session-login');
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm');
Route::get('/detail-produk/{id}', [ProductDetailController::class, 'show'])->name('umkm.detail');
Route::post('/support/store', [SupportController::class, 'store'])->middleware('auth')->name('support.store');

Route::redirect('/login', '/app/login')->name('filament.pages.login');

Route::redirect('/register', '/app/register')->name('filament.pages.register');

Route::redirect('/dashboard', '/app')->middleware(['auth', CheckAdminRole::class])->name('filament.pages.dashboard');
// Admin-only routes: /app dan seterusnya
Route::get('/app', [Dashboard::class, 'render'])->name('app.dashboard');
Route::redirect('/app', '/app/dashboard');
Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
    ->middleware(['signed', 'verified', 'auth', AuthenticateSession::class])
    ->name('team-invitations.accept');
