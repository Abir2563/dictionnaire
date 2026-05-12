<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermeController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\MaladieController;

Route::get('/', function () {
    return view('home');
});
Route::get('/maladie', function () {
    return view('maladie');
});
Route::get('/chaine', function () {
    return view('chaine');
});
Route::get('/source', function () {
    return view('source');
});
Route::get('/bibliographie', function () {
    return view('bibliographie');
});


Route::get('/chaine', [TermeController::class, 'index']);
Route::get('/source', [SourceController::class, 'index']);
Route::get('/maladie', [MaladieController::class, 'index']);



