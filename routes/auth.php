<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\RegisterController;

    Route::view('/login', 'auth.login')->middleware('guest')->name('login');
    Route::view('/register', 'auth.register')->middleware('guest')->name('register');

    Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register');
    
    Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
?>