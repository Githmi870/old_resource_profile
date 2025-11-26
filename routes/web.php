<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/api.php';
require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/wait', function () {
    return view('WaitingScreen');
})->name('wait');

Route::get('/team/portfolio', function(){
    return view('team.portfolio');
})->name('team_portfolio');

Route::middleware('auth', 'approved')->group(function () {
    Route::get('/admin', function () {
        return view('AdminPage');
    })->name('admin');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/basic', function () {
        return view('BasicInformationPage');
    })->name('basic');

    Route::get('/env', function () {
        return view('EnvironmentalInformation');
    })->name('env');

    Route::get('/edu', function () {
        return view('EducationPage');
    })->name('edu');

    Route::get('/reg', function () {
        return view('ReligionInformation');
    })->name('reg');

    Route::get('/pop', function () {
        return view('populationInformation');
    })->name('pop');

    Route::get('/hou', function () {
        return view('houseInformation');
    })->name('hou');

    Route::get('/sev', function () {
        return view('serviceEmployee');
    })->name('sev');

    Route::get('/hea', function () {
        return view('healthInformation');
    })->name('hea');

    Route::get('/infras', function () {
        return view('InfrastructurePage');
    })->name('infras');

    Route::get('/eco', function () {
        return view('EconomicActivity');
    })->name('eco');

    Route::get('/com', function () {
        return view('CommunityInformation');
    })->name('com');

    Route::get('/soc', function () {
        return view('SocialWelfare');
    })->name('soc');
});
