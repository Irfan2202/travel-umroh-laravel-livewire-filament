<?php


use App\Livewire\Order\Index;
use Illuminate\Support\Facades\Route;
use App\Livewire\Packages\DetailPackages;

Route::get('/', function () {
    return view('index');
});
Route::get('/packages/{id}/detail', DetailPackages::class)
    ->name('packages.detail-packages');

Route::get('/orders', Index::class)
    ->name('orders.index');
