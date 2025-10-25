<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Packages\DetailPackages;

Route::get('/', function () {
    return view('index');
});
Route::get('/packages/{id}/detail', DetailPackages::class)
    ->name('packages.detail-packages');
