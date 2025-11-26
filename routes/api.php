<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\GovFigureController;
use App\Http\Controllers\AbondenedBuildingController;
use App\Http\Controllers\AbondenedProjectController;
use App\Http\Controllers\WaterResourceController;
use App\Http\Controllers\SNZController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Admin\UserManagementController;
use \App\Http\Controllers\NDController;
use \App\Http\Controllers\GHController;

//Register API routes for fetching location and basic info names
Route::get('/api/ds-by-district/{d_code}', [LocationController::class, 'getDS']);
Route::get('/api/gnd-by-ds/{ds_id}', [LocationController::class, 'getGND']);

Route::middleware('auth')->group(function () {
    //Admin routes
    Route::get('/api/get-users', [UserManagementController::class, 'index']);
    Route::post('/api/apr-user/{user}', [UserManagementController::class, 'approve']);
    Route::post('/api/rej-user/{user}', [UserManagementController::class, 'reject']);
    Route::post('/api/deny-all', [UserManagementController::class, 'denyAll']);
    Route::post('/api/approve-all', [UserManagementController::class, 'approveAll']);

    //Dashboard info routes
    Route::get('/api/gnd-by-uid/{gnd_uid}', [BasicInfoController::class, 'getGNDName']);
    Route::get('/api/ds-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getDSNameByGND']);
    Route::get('/api/district-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getDistrictNameByGND']);
    Route::get('/api/gnd-number-by-uid/{gnd_uid}', [BasicInfoController::class, 'getGNDNumber']);
    Route::get('/api/lgd-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getLGDNameByGND']);
    Route::get('/api/pd-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getPDNameByGND']);

    //Government Figures routes
    Route::post('/api/insert-gf/{gnd_uid}', [GovFigureController::class, 'insertGovernmentFigure']);
    Route::get('/api/get-gf/{gnd_uid}', [GovFigureController::class, 'getAllGovernmentFigure']);
    Route::delete('/api/delete-gf/{gf_id}', [GovFigureController::class, 'deleteGovernmentFigure']);

    //Abondened Government Buildings routes
    Route::get('/api/get-agb/{gnd_uid}', [AbondenedBuildingController::class, 'getAbondenedBuidings']);
    Route::post('/api/insert-agb/{gnd_uid}', [AbondenedBuildingController::class, 'insertAbondenedBuilding']);
    Route::delete('/api/delete-agb/{ab_id}', [AbondenedBuildingController::class, 'deleteAbondenedBuilding']);

    //Abondened Projects routes
    Route::get('/api/get-ap/{gnd_uid}', [AbondenedProjectController::class, 'getAbondenedProjects']);
    Route::post('/api/insert-ap/{gnd_uid}', [AbondenedProjectController::class, 'addAbondenedProject']);
    Route::delete('/api/delete-ap/{ap_id}', [AbondenedProjectController::class, 'deleteAbondenedProject']);

    //Water Sources routes
    Route::post('/api/insert-wr/{gnd_uid}', [WaterResourceController::class, 'insertWaterResource']);
    Route::get('/api/get-wr/{gnd_uid}', [WaterResourceController::class, 'getWaterResources']);
    Route::delete('/api/delete-wr/{wr_id}/{gnd_uid}', [WaterResourceController::class, 'deleteWaterResource']);

    //SNZ routes
    Route::get('/api/get-snz/{gnd_uid}', [SNZController::class, 'getSNZ']);
    Route::post('/api/insert-snz/{gnd_uid}', [SNZController::class, 'insertSNZ']);
    Route::delete('/api/delete-snz/{snz_id}/{gnd_uid}', [SNZController::class, 'deleteSNZ']);

    //Resource Routes
    Route::get('/api/get-resources/{gnd_uid}', [ResourceController::class, 'getResources']);
    Route::post('/api/insert-resource/{gnd_uid}', [ResourceController::class, 'insertResource']);
    Route::delete('/api/delete-resource/{r_id}/{gnd_uid}', [ResourceController::class, 'deleteResource']);

    //ND Routes
    Route::get('/api/get-nd-list', [NDController::class, 'getNDList']);
    Route::post('/api/insert-nd/{gnd_uid}', [NDController::class, 'insertND']);

    Route::get('/api/get-gh', [GHController::class, 'getGH']);
    Route::post('/api/insert-gh', [GHController::class, 'insertGH']);
});
