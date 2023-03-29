<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\NotesController;



Route::resource('notes', NotesController::class);
