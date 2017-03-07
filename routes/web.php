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

// Auth::routes();

// Main pages
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/to-buy', function () {
    return view('to-buy');
});

Auth::routes();

//degree Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('degree','\App\Http\Controllers\DegreeController');
  Route::post('degree/{id}/update','\App\Http\Controllers\DegreeController@update');
  Route::get('degree/{id}/delete','\App\Http\Controllers\DegreeController@destroy');
  Route::get('degree/{id}/deleteMsg','\App\Http\Controllers\DegreeController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

//lesson Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('lesson','\App\Http\Controllers\LessonController');
  Route::post('lesson/{id}/update','\App\Http\Controllers\LessonController@update');
  Route::get('lesson/{id}/delete','\App\Http\Controllers\LessonController@destroy');
  Route::get('lesson/{id}/deleteMsg','\App\Http\Controllers\LessonController@DeleteMsg');
});

//quiz Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('quiz','\App\Http\Controllers\QuizController');
  Route::post('quiz/{id}/update','\App\Http\Controllers\QuizController@update');
  Route::get('quiz/{id}/delete','\App\Http\Controllers\QuizController@destroy');
  Route::get('quiz/{id}/deleteMsg','\App\Http\Controllers\QuizController@DeleteMsg');
});

//digital_content Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('digital_content','\App\Http\Controllers\Digital_contentController');
  Route::post('digital_content/{id}/update','\App\Http\Controllers\Digital_contentController@update');
  Route::get('digital_content/{id}/delete','\App\Http\Controllers\Digital_contentController@destroy');
  Route::get('digital_content/{id}/deleteMsg','\App\Http\Controllers\Digital_contentController@DeleteMsg');
});

//online_lec Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('online_lec','\App\Http\Controllers\Online_lecController');
  Route::post('online_lec/{id}/update','\App\Http\Controllers\Online_lecController@update');
  Route::get('online_lec/{id}/delete','\App\Http\Controllers\Online_lecController@destroy');
  Route::get('online_lec/{id}/deleteMsg','\App\Http\Controllers\Online_lecController@DeleteMsg');
});

//recorded_lec Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('recorded_lec','\App\Http\Controllers\Recorded_lecController');
  Route::post('recorded_lec/{id}/update','\App\Http\Controllers\Recorded_lecController@update');
  Route::get('recorded_lec/{id}/delete','\App\Http\Controllers\Recorded_lecController@destroy');
  Route::get('recorded_lec/{id}/deleteMsg','\App\Http\Controllers\Recorded_lecController@DeleteMsg');
});

//subject Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('subject','\App\Http\Controllers\SubjectController');
  Route::post('subject/{id}/update','\App\Http\Controllers\SubjectController@update');
  Route::get('subject/{id}/delete','\App\Http\Controllers\SubjectController@destroy');
  Route::get('subject/{id}/deleteMsg','\App\Http\Controllers\SubjectController@DeleteMsg');
});

//section Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('section','\App\Http\Controllers\SectionController');
  Route::post('section/{id}/update','\App\Http\Controllers\SectionController@update');
  Route::get('section/{id}/delete','\App\Http\Controllers\SectionController@destroy');
  Route::get('section/{id}/deleteMsg','\App\Http\Controllers\SectionController@DeleteMsg');
});


//Email Routes
Route::get('register/verify/{token}', '\App\Http\Controllers\Auth\RegisterController@verify'); 
Route::get('/active', function () {
    return view('emails.active');
});
Route::get('/active/resend', function () {
    return view('emails.resend');

});
Route::post('/active/resend' ,'\App\Http\Controllers\Auth\RegisterController@resendactive');

Route::get('/applay', function () {
    return view('emails.applay');
});

// New Routes by Fatmah

Route::get('/test','\App\Http\Controllers\LessonController@list');

Route::get('/home', 'HomeController@index');

// Student Routes with authentication ...
Route::group(['middleware' => ['auth']], function () {

  Route::get('/profile',
    'ScaffoldInterface\UserController@profile');

  Route::patch('/user/{User}/uploadimg',
    'ScaffoldInterface\UserController@uploadimg');

  Route::get('/user/{User}/settings',
    'ScaffoldInterface\UserController@editprofile');

  Route::patch('/user/{User}/settings',
    'ScaffoldInterface\UserController@updateprofile');

  Route::get('/user/{User}/courses',
    'ScaffoldInterface\UserController@listcourses');

  Route::get('/user/{User}/favcourses',
    'ScaffoldInterface\UserController@favcourses');

  Route::get('/user/{User}/classes', 
    'ScaffoldInterface\UserController@classes');

  Route::get('/user/{id}/cp-verify', 
    'ScaffoldInterface\UserController@cp_verify');
    
});

Route::get('subject/{id}/view', 'SubjectController@view');

// Erroes routes ...

Route::get('notfound', function () {
    return view('errors.404');
});


// Search 
// Route::get('/', function() {
     
//     $client = Elasticsearch\ClientBuilder::create()->build();
//     var_dump($client);
// });

Route::get('/search', 'SearchController@search');

// Social media .. 
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');