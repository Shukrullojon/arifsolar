<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $l = request()->getRequestUri();
    if ($l == "/ru"){
        session([
            'locale' => "ru"
        ]);
    }
    if ($l == "/uz"){
        session([
            'locale' => "uz"
        ]);
    }
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
});

Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'uz|ru']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('welcome')
        ->middleware('setlocale');
});

Route::post('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->name("notification");
Route::post('/jobAdd', [App\Http\Controllers\HomeController::class, 'jobAdd'])->name("jobAdd");

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'profile'])->name("profile");
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'main'])->name('home');
        Route::resource('about', \App\Http\Controllers\AboutController::class);
        Route::resource('comment', \App\Http\Controllers\CommentController::class);
        Route::resource('consultation', \App\Http\Controllers\ConsultationController::class);
        Route::resource('job', \App\Http\Controllers\JobController::class);
        Route::resource('news', \App\Http\Controllers\NewsController::class);
        Route::resource('partner', \App\Http\Controllers\PartnerController::class);
        Route::resource('question', \App\Http\Controllers\QuestionController::class);
        Route::resource('review', \App\Http\Controllers\ReviewController::class);
        Route::resource('work', \App\Http\Controllers\WorkController::class);
        Route::resource('header', \App\Http\Controllers\HeaderController::class);
    });
});

Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->route("welcome", $lang);
})->name("language");
