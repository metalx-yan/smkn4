<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('rooms', 'RoomController')->middleware(['auth','role:wakasek-kurikulum']);
Route::resource('grades', 'GradeController')->middleware(['auth','role:wakasek-kurikulum']);
Route::resource('majors', 'MajorController')->middleware(['auth','role:wakasek-kurikulum']);
Route::resource('sections', 'SectionController')->middleware(['auth','role:wakasek-kurikulum']);
Route::resource('concentrations', 'ConcentrationController')->middleware(['auth','role:wakasek-kurikulum']);
Auth::routes();
