<?php

use App\Http\Livewire\Chess;
use Illuminate\Support\Facades\Route;

Route::get('/', Chess::class)->name('home');
