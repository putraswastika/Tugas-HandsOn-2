<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController; 


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

Route::get('/', function () {
    return view('profileMenu');
});

Route::get('/map', [MapController::class, 'index']);
Route::get('/tugas1', [MapController::class, 'index2']);
Route::get('/latihan2', [MapController::class, 'index3']);
Route::get('/tugas2', [MapController::class, 'handsOn2']);
Route::get('/profile', [MapController::class, 'profile']);
Route::get('/tester', [MapController::class, 'testerView']);

use App\Http\Controllers\MapDataController;
// Mendapatkan semua marker dalam bentuk JSON

Route::get('/api/markers', [MapDataController::class, 'getMarkers']);
Route::get('/api/polygons', [MapDataController::class, 'getPolygons']);
Route::post('/api/markers', [MapDataController::class, 'storeMarker']);
Route::post('/api/polygons', [MapDataController::class, 'storePolygon']);
Route::delete('/api/markers/{id}', [MapDataController::class, 'deleteMarker']);
Route::delete('/api/polygons/{id}', [MapDataController::class, 'deletePolygon']);