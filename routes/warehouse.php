<?php

Route::group(['namespace' => 'Warehouse'], function() {
    Route::get('/', 'HomeController@index')->name('warehouse.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('warehouse.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('warehouse.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('warehouse.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('warehouse.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('warehouse.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('warehouse.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('warehouse.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('warehouse.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('warehouse.verification.verify');
});