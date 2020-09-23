<?php

Route::group(['namespace' => 'Cargo'], function() {
    Route::get('/', 'HomeController@index')->name('cargo.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('cargo.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('cargo.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('cargo.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('cargo.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('cargo.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('cargo.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('cargo.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('cargo.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('cargo.verification.verify');
});