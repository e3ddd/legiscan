<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group([], function() {
    Route::get('/', [\App\Http\Controllers\Frontend\ShowDashboards::class, 'showApp']);
    Route::get("{any?}", \App\Http\Controllers\FrontendController::class)->where('any', '.*');
});


Route::post('/get-legiscan-info', [\App\Http\Controllers\LegiScanController::class, 'getAllLegiScanInfo']);
Route::post('/get-info-by-slug', [\App\Http\Controllers\LegiScanController::class, 'getInfoBySlug']);

