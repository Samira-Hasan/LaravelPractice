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

 Route:: get('/', 'CrudController@index');

 Route:: get('/view', 'CrudController@view');

Route:: post('/save-student', 'CrudController@saveStudent');

Route:: get('/delete/{id}', 'CrudController@delete');

Route:: get('/edit/{id}', 'CrudController@edit');

Route:: post('/update-student', 'CrudController@updateStudent');

