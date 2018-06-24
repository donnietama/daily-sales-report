<?php

Auth::routes();


Route::get('/', function () {
    return redirect('/login');
});

// User Control resources
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

// Report Control management
Route::post('/report', 'ReportController@store')->middleware('auth')->name('saveReport');
Route::get('/report/view', 'ReportController@index')->middleware('auth')->name('report');
Route::get('/report/create', 'ReportController@create')->middleware('auth')->name('makeReport');
Route::get('/report/search', 'ReportController@search')->middleware('auth');

// Report Export management
Route::get('/report/exportExcel/download', 'ReportController@showExcelForm')->middleware('auth')->name('to-excel');
Route::get('/report/exportPdf/download', 'ReportController@showPDFForm')->middleware('auth')->name('to-pdf');
Route::get('/report/exportExcel', 'ReportController@export')->middleware('auth')->name('export-excel');
Route::get('/report/exportPdf', 'ReportController@exportPDF')->middleware('auth')->name('export-pdf');

// Product and recipe management
Route::get('/recipe/view', 'RecipeController@index')->name('recipe');
Route::get('/recipe/add', 'RecipeController@showRecipeForm')->name('showRecipeForm');
Route::post('/recipe', 'RecipeController@addProductAndRecipe')->name('submitRecipe');
Route::post('/recipe/{productCode}', 'RecipeController@deleteProductAndRecipe')->name('deleteProductAndRecipe');