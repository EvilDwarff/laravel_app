<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::view('/author', 'author.show');
Route::view('/recipe', 'recipe.show');

