<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\StudentController


//rout GET simpele





Route::post('', [StudentController::class,'create']);


