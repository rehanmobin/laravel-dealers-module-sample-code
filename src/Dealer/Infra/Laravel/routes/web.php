<?php

use Illuminate\Support\Facades\Route;


Route::get('/dealer/dashboard', ['uses' => 'DealerDashboardController@index', 'as' => 'dealer.dashboard']);
Route::get('/dealer/account/login', ['uses' => 'DealerLoginController@renderLoginForm'])->name('dealer.login');
Route::get('/dealer/account/register', ['uses' => 'DealerRegisterController@renderRegisterForm'])->name('dealer.registration');
Route::post('/dealer/account/register', ['uses' => 'DealerRegisterController@postAction'])->name('dealer.registration.post');
