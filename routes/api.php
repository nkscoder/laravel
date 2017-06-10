<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//
//Route::get('students/{id}/sections', 'StudentsController@index');
//
//Route::get('students/show/{id}', 'StudentsController@show');
//
//Route::resource('calendars','CalendarController');
//Route::resource('teachers','TeacherController');
//Route::resource('noteFiles', 'NoteController');
//Route::resource('standards', 'StudentsController');
//Route::resource('notices','NoticeController');
//Route::resource('sections', 'SectionsController');
//Route::get('standards/{id}/sections', 'SectionsController@index');
//Route::get('exams/{id}/sections', 'SectionsController@getSectionsByExam');
//
//Route::resource('students', 'StudentsController');
//Route::get('sections/{id}/students', 'StudentsController@index');
//Route::get('standards/{id}/students', 'StudentsController@getStudentsByStandard');
//Route::get('sections/{id}/exams', 'ExamsController@getExamsBySections');
//
//
//Route::resource('exams', 'ExamsController');
//
//
//Route::resource('subjects', 'SubjectsController');
//Route::get('sections/{id}/subjects', 'SubjectsController@getSubjectsBySections');
//
//
//Route::get('performance/', 'PerformanceController@index');
//
//
//Route::resource('badges', 'BadgesController');
//
//Route::resource('groups', 'GroupsController');
//
//Route::resource('attendance', 'AttendanceController');
//Route::resource('diary', 'DiaryController');
//Route::resource('schoolevent', 'SchoolEventController');
// Route::get('attendance/show/{id}', 'AttendanceController@show');
/*
//UserRoutes
Route::post('/user/create','UsersController@store');

Route::get('/user/all','UsersController@index');

Route::get('/user/show/{id}','UsersController@show');

//Event Routes
Route::post('/event/create', 'EventsController@store');

Route::get('/event/all', 'EventsController@index');

Route::get('/event/show/{id}', 'EventsController@show');

//Standard Routes
Route::post('/standard/create', 'StudentsController@store');

Route::get('/standard/all', 'StudentsController@index');

Route::get('/standard/show/{id}', 'StudentsController@show');

//Section Routes
Route::post('/section/create', 'SectionsController@store');

Route::get('/section/all', 'SectionsController@index');

Route::get('/section/show/{id}', 'SectionsController@show');

Route::get('/section/students/{id}', 'SectionsController@students');

//Student Routes
Route::post('/student/create', 'StudentsController@store');

Route::get('/student/all', 'StudentsController@index');

Route::get('/student/show/{id}', 'StudentsController@show');

Route::get('/student/section/{id}', 'StudentsController@section');
*/
