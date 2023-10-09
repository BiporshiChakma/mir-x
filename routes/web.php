<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);
Route::get('/projects',[ProjectController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);



Route::get('/heroData',[HomeController::class,'heroData']);
Route::get('/aboutData',[HomeController::class,'aboutData']);
Route::get('/socialData',[HomeController::class,'socialData']);
Route::get('/projectsData',[ProjectController::class,'projectsData']);
Route::get('/resumeData',[ResumeController::class,'resumeLink']);
Route::get('/experiancesData',[ResumeController::class,'experiancesData']);
Route::get('/educationData',[ResumeController::class,'educationData']);
Route::get('/skillsData',[ResumeController::class,'skillData']);
Route::get('/languageData',[ResumeController::class,'languageData']);
Route::post('/contactRequest',[ContactController::class, 'contactRequest']);
