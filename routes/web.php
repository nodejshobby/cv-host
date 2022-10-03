<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\ContactDetailController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\WorkHistoryController;
use App\Http\Controllers\SkillController;




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
Route::controller(HomeController::class)->name('home.')->group(function(){
    Route::get('/', 'show')->name('show');
});


Route::controller(LoginController::class)->name('login.')->group(function(){
    Route::get('login', 'show')->name('show')->middleware('guest');
    Route::post('login', 'signin')->name('authenticate')->middleware('guest');
    Route::get('logout', 'logout')->name('logout')->middleware('auth');

});


Route::controller(RegisterController::class)->name('register.')->group(function(){
    Route::get('register','show')->name('show');
    Route::post('register','store')->name('store');
});

Route::controller(ProfileController::class)->name('profile.')->middleware('auth')->group(function(){
    Route::get('profile','index')->name('index');
    Route::put('profile', 'update')->name('update');
});


Route::controller(PasswordController::class)->name('password.')->middleware('auth')->group(function(){
    Route::get('password','index')->name('index');
    Route::put('password','update')->name('update');
});

Route::controller(TemplateController::class)->name('template.')->group(function(){
    Route::get('choose-template','index')->name('index');
});

Route::controller(UserDetailController::class)->name('user_detail.')->middleware('auth')->group(function(){
    Route::get('user-detail/{template}','index')->name('index');
    Route::post('user-detail/{template}','create')->name('create');
    Route::get('user-detail/edit/{userDetail}','edit')->name('edit');
    Route::put('user-detail/update/{userDetail}','update')->name('update');

});


Route::controller(ContactDetailController::class)->name('contact_detail.')->middleware('auth')->group(function(){
    Route::get('contact-detail/{cv}', 'index')->name('index');
    Route::post('contact-detail/{cv}', 'create')->name('create');
    Route::get('contact-detail/edit/{contactDetail}', 'edit')->name('edit');
    Route::put('contact-detail/update/{contactDetail}', 'update')->name('update');
});


Route::controller(SummaryController::class)->name('summary.')->middleware('auth')->group(function(){
    Route::get('summary/{cv}', 'index')->name('index');
    Route::post('summary/{cv}', 'create')->name('create');
    Route::get('summary/edit/{summary}', 'edit')->name('edit');
    Route::put('summary/update/{summary}', 'update')->name('update');
});


Route::controller(EducationController::class)->name('education.')->middleware('auth')->group(function(){
    Route::get('education/{cv}', 'index')->name('index');
    Route::post('education/{cv}', 'create')->name('create');
    Route::get('education/edit/{education}', 'edit')->name('edit');
    Route::put('education/update/{education}', 'update')->name('update');
    Route::delete('education/{education}', 'delete')->name('delete');
});

Route::controller(WorkHistoryController::class)->name('history.')->middleware('auth')->group(function(){
    Route::get('history/{cv}', 'index')->name('index');
    Route::post('history/{cv}', 'create')->name('create');
    Route::get('history/edit/{history}', 'edit')->name('edit');
    Route::put('history/update/{history}', 'update')->name('update');
    Route::delete('history/{history}', 'delete')->name('delete');
});


Route::controller(SkillController::class)->name('skill.')->middleware('auth')->group(function(){
    Route::get('skill/{cv}', 'index')->name('index');
    Route::post('skill/{cv}', 'create')->name('create');
    Route::get('skill/edit/{skill}', 'edit')->name('edit');
    Route::put('skill/update/{skill}', 'update')->name('update');
    Route::delete('skill/{skill}', 'delete')->name('delete');
});


Route::controller(CVController::class)->name('cv.')->middleware('auth')->group(function(){
    Route::get('cv/{cv}', 'index')->name('index');
    Route::delete('cv/{cv}', 'delete')->name('delete');
});





