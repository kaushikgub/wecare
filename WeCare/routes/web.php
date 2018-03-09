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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','myController@showHome');
Route::get('/login','myController@login');



Route::get('/admin','AdminController@adminLogIn'); //from index file for logIn
Route::post('/adminLogIn','adminController@login'); //for matching id and password
Route::get('/adminhome','myController@adminHome'); //for showing admin home
Route::get('/showadmin','AdminController@show'); //for view admin list
Route::post('/addAdmin','adminController@store'); //for add admin
Route::get('/addadmin','myController@addAdmin'); //for add admin as a admin



Route::get('/addDoctor','myController@addDoctor'); //from admin page
Route::post('/postDoctor','DoctorController@store'); //information from addDoctor
Route::get('/viewDoctor','DoctorController@show'); //from admin page



Route::get('/addModerator','myController@addModerator'); //from admin page
Route::post('/postModerator','ModeratorController@store'); //information from addModerator
Route::get('/viewModerator','ModeratorController@show'); //from admin page


Route::get('/editDoctor/{id}','DoctorController@edit'); // from view doctor
Route::get('/deleteDoctor/{id}','DoctorController@delete'); // from view doctor
Route::post('/postEditDoctor','DoctorController@update'); // from  edit doctor


Route::get('/editModerator/{id}','ModeratorController@edit'); // from view Moderator
Route::post('/postEditModerator','ModeratorController@update'); // from view Moderator
Route::get('/deleteModerator/{id}','ModeratorController@delete'); // from edit Moderator


Route::get('/doctor','myController@doctorLogin');//from home page
Route::get('/moderator','myController@moderatorLogin');//from home page

//for moderator login
Route::post('/postModeratorLogin','ModeratorController@login');
//Route::get('/homeModerator','myController@moderatorHome');

Route::get('/patient','PatientController@index');
Route::post('/patientView','PatientController@search');

//Route::get('/appointment','AppointmentController@page');

//For js ajax
Route::get('/finddoctor','AppointmentController@finddoctor');
Route::get('/findslot','AppointmentController@findslot');
Route::get('/findtime','AppointmentController@findtime');
Route::get('/moderatorname','AppointmentController@findmoderatorname');


//for doctor login
Route::post('/postDoctorLogin','DoctorController@login');
Route::get('/homeDoctor','myController@homeDoctor');

//from moderator home
Route::get('/addSlot','myController@addSlot');
Route::post('/postSlot','SlotController@store');
Route::get('/viewPatient/{id}','PatientController@view');
Route::get('/viewPatient','PatientController@view');

Route::get('/deletePatient/{id}','PatientController@delete');



//for appointment
Route::post('/postAppoiment','AppointmentController@submit');


//from doctor home
Route::get('/viewPatient/{id}','PatientController@doctorView');

