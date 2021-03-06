<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'index', 'uses'=>'Controllers\IndexController@show']);

Route::auth();

Route::get('/about', 'AboutController@index');

//Страница задач
Route::get('/tasks', [ 'as'=>'Tasks', 'middleware' => ['auth'], 'uses'=>'Controllers\TasksController@show']);
//Получение задач с определенным статусом
Route::get('/get_tasks/{type}', [ 'middleware' => ['auth'], 'uses'=>'Controllers\TasksController@get_tasks']);
//Получение одной задачи
Route::get('/get_task/{id}', [ 'middleware' => ['auth'], 'uses'=>'Controllers\TasksController@get_task']);
//Добавление/редактирование задачи
Route::post('/save_task', [ 'middleware' => ['auth'], 'uses'=>'Controllers\TasksController@save_task']);
//Получение комментариев к задаче
Route::get('/get_comments/{task_id}', [ 'middleware' => ['auth'], 
		   'uses'=>'Controllers\CommentsController@get_task_comments']);
Route::get('/add_comment/{task_id}', [ 'middleware' => ['auth'], 
           'uses'=>'Controllers\CommentsController@add_comment']);
//Добавление комментария к задаче
Route::post('/add_comment/{task_id}', [ 'middleware' => ['auth'], 'uses'=>'Controllers\CommentsController@add_comment']);
