<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::post('/', [
    'uses' => 'HomeController@ContactUsForm',
    'as' => 'home'
]);

Route::get('/job', [
    'uses' => 'JobController@index',
    'as' => 'job'
]);

Route::post('/job', [
    'uses' => 'JobController@JobApply',
    'as' => 'job'
]);

Route::get('/courses', [
    'uses' => 'CoursesController@index',
    'as' => 'courses'
]);

Route::post('/courses', [
    'uses' => 'CoursesController@CoursesRegister',
    'as' => 'courses'
]);

Route::get('lang/{locale}', 'LocalizationController@index');
