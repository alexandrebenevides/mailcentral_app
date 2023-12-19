<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\SignIn;
use App\Livewire\Pages\SignUp;
 
Route::get('/', SignIn::class);
Route::get('/signin', SignIn::class);
Route::get('/signup', SignUp::class);
