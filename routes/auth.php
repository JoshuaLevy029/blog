<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\LoginController;

    Route::view('/login', 'auth.login')->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login');
    Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
?>