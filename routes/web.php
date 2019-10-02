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

// Route::get('/employee','EmployeesController@index');
// Route::get('/employee/create','EmployeesController@create');
// Route::get('/employee/{employee}','EmployeesController@show');
// Route::post('/employee','EmployeesController@store');
// Route::delete('/employee/{employee}','EmployeesController@destroy');
// Route::get('/employee/{employee}/edit','EmployeesController@edit');
// Route::patch('/employee/{employee}','EmployeesController@update');
// Route::get('/login','AuthController@login');
// Route::post('/login','AuthController@doLogin');
Route::redirect('/', '/beranda', 301);
Route::middleware('auth')->group(function () {
    Route::get('/beranda','DashboardController@index');
    Route::resource('pegawai', 'EmployeesController');
    Route::resource('pendidikan', 'EducationsController');
    Route::resource('pangkat', 'GradesController');
    Route::resource('cuti', 'LeavesController');
    Route::resource('kinerja', 'PerformancesController');

    Route::get('/laporan/cuti','ReportLeavesController@index');
    Route::post('/laporan/cuti','ReportLeavesController@report');
    Route::get('/laporan/cuti/{leave}','ReportLeavesController@print');

    Route::get('/laporan/kinerja','ReportPerformancesController@index');
    Route::post('/laporan/kinerja','ReportPerformancesController@report');
    Route::get('/laporan/kinerja/{tahun}/{bulan}','ReportPerformancesController@print');
});
Auth::routes();
