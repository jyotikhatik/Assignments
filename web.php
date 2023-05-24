<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Studentcontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',function()
{
    return view('Emp.index');
});
Route::get('list',[Studentcontroller::class,'index']);
Route::get('add',[Studentcontroller::class,'Addstudent']);
Route::post('save',[Studentcontroller::class,'savestudent']);
Route::get('edit/{id}',[Studentcontroller::class,'editstudent']);
Route::post('update',[Studentcontroller::class,'updatestudent']);

Route::get('delete/{id}',[Studentcontroller::class,'deletestudent']);


