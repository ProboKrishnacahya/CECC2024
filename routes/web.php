<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/guidance', function () {
    return view('pages.guidance');
})->name('guidance');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('competition')->group(function () {
        Route::get('/', function () {
            return view('pages.competition.competition');
        })->name('competition');

        Route::get('/quiz', function () {
            return view('pages.competition.quiz');
        })->name('competition.quiz');

        Route::get('/after-quiz', function () {
            return view('pages.competition.after-quiz');
        })->name('competition.after-quiz');

        Route::get('/confirmation', function () {
            return view('pages.competition.confirmation');
        })->name('competition.confirmation');
    });
});
