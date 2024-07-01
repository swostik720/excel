<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentImportController;
use App\Http\Controllers\StudentExportController;
use App\Http\Controllers\StudentController;

// Route for the index page
Route::get('/index', [StudentController::class, 'index']);

// Route for importing students
Route::post('/index/import-students', [StudentImportController::class, 'import'])->name('students.import');

// Route for exporting students
Route::get('index/export-students', [StudentExportController::class, 'export'])->name('students.export');
