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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notes', 'NoteController@index')->name('note.index');
Route::get('/note/import', 'NoteController@import')->name('note.import');
Route::get('/note/{slug}', 'NoteController@view')->name('note.view');
Route::get('/admin/note/edit/{note}', 'NoteController@admin_edit')->name('note.edit');
