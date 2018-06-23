<?php

Auth::routes();


Route::get('/', function () {
    return redirect('/login');
});

// Route Control management
Route::post('/report', 'ReportController@store')->middleware('auth')->name('saveReport');
Route::get('/report/view', 'ReportController@index')->middleware('auth')->name('report');
Route::get('/report/create', 'ReportController@create')->middleware('auth')->name('makeReport');
Route::get('/report/search', 'ReportController@search')->middleware('auth');

// Route Export management
Route::get('/report/exportExcel/download', 'ReportController@showExcelForm')->middleware('auth')->name('to-excel');
Route::get('/report/exportPdf/download', 'ReportController@showPDFForm')->middleware('auth')->name('to-pdf');
Route::get('/report/exportExcel', 'ReportController@export')->middleware('auth')->name('export-excel');
Route::get('/report/exportPdf', 'ReportController@exportPDF')->middleware('auth')->name('export-pdf');

// User Control resources
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');