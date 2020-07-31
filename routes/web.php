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
Route::get('/', 'Frontend\PageController@index')->name('login');

Route::get('/sign-up', 'Frontend\PageController@signup')->name('signup');

Route::post('/savelogin', 'Auth\UserController@savelogin')->name('savelogin');

Route::post('/signin', 'Auth\UserController@signin')->name('signin');

Route::get('/logout', 'Auth\UserController@logout')->name('logout');


//=======Admin=======//
Route::group([ 'middleware' => 'web', 'prefix' => 'admin', 'before' => 'admin' ], function(){

    //dashboard route
    Route::get('/dashboard', 'Admin\PageController@dashboard')->name('dashboard');


    // Users Routes
    Route::get('/users', 'Admin\PageController@user')->name('user');

    Route::get('/archived-user', 'Admin\PageController@archiveuser')->name('archiveuser');

    Route::get('/activate-user/{id}', 'Admin\PageController@activateuser')->name('activateuser');

    Route::get('/deactivate-user/{id}', 'Admin\PageController@deactivateuser')->name('deactivateuser');


    // student routes
    Route::get('/students', 'Admin\PageController@student')->name('students');

    Route::get('/archived-student', 'Admin\PageController@archivestudent')->name('archivestudent');

    Route::get('/activate-student/{id}', 'Admin\PageController@activatestudent')->name('activatestudent');

    Route::get('/deactivate-student/{id}', 'Admin\PageController@deactivatestudent')->name('deactivatestudent');


    // lecturer routes
    Route::get('/add-lecturer', 'Admin\PageController@addlecturer')->name('addlecturer');

    Route::post('/save-lecturer', 'Admin\PostController@savelecturer')->name('savelecturer');

    Route::get('/edit-lecturer/{id}', 'Admin\PageController@editlecturer')->name('editlecturer');

    Route::get('/update-lecturer/{id}', 'Admin\PostController@updatelecturer')->name('updatelecturer');

    Route::get('/lecturers', 'Admin\PageController@lecturer')->name('lecturer');

    Route::get('/lecturer-profile/{id}', 'Admin\PageController@lecturerprofile')->name('lecturerprofile');

    Route::get('/archived-lecturers', 'Admin\PageController@archivelecturer')->name('archivelecturer');

    Route::get('/activate-lecturer/{id}', 'Admin\PageController@activatelecturer')->name('activatelecturer');

    Route::get('/deactivate-lecturer/{id}', 'Admin\PageController@deactivatelecturer')->name('deactivatelecturer');


    // course routes
    Route::get('/add-course', 'Admin\PageController@addcourse')->name('addcourse');

    Route::post('/save-course', 'Admin\PostController@savecourse')->name('savecourse');

    Route::get('/courses', 'Admin\PageController@course')->name('course');

    Route::get('/edit-course/{id}', 'Admin\PageController@editcourse')->name('editcourse');

    Route::get('/update-course/{id}', 'Admin\PostController@updatecourse')->name('updatecourse');

    Route::get('/archived-courses', 'Admin\PageController@archivecourse')->name('archivecourse');

    Route::get('/activate-course/{id}', 'Admin\PageController@activatecourse')->name('activatecourse');

    Route::get('/deactivate-course/{id}', 'Admin\PageController@deactivatecourse')->name('deactivatecourse');


    // libary routes
    Route::get('/add-libary', 'Admin\PageController@addlibary')->name('addlibary');

    Route::post('/save-libary', 'Admin\PostController@savelibary')->name('savelibary');

    Route::get('/libary', 'Admin\PageController@libary')->name('libary');

    Route::get('/edit-libary/{id}', 'Admin\PageController@editlibary')->name('editlibary');

    Route::get('/update-libary/{id}', 'Admin\PostController@updatelibary')->name('updatelibary');

    Route::get('/archived-libary', 'Admin\PageController@archivelibary')->name('archivelibary');

    Route::get('/activate-libary/{id}', 'Admin\PageController@activatelibary')->name('activatelibary');

    Route::get('/deactivate-libary/{id}', 'Admin\PageController@deactivatelibary')->name('deactivatelibary');


    // departments routes
    Route::get('/add-department', 'Admin\PageController@adddepartment')->name('adddepartment');

    Route::post('/save-department', 'Admin\PostController@savedepartment')->name('savedepartment');

    Route::get('/department', 'Admin\PageController@department')->name('department');

    Route::get('/edit-department/{id}', 'Admin\PageController@editdepartment')->name('editdepartment');

    Route::get('/update-department/{id}', 'Admin\PostController@updatedepartment')->name('updatedepartment');

    Route::get('/archived-department', 'Admin\PageController@archivedepartment')->name('archivedepartment');

    Route::get('/activate-department/{id}', 'Admin\PageController@activatedepartment')->name('activatedepartment');

    Route::get('/deactivate-department/{id}', 'Admin\PageController@deactivatedepartment')->name('deactivatedepartment');


    // General Reports Routes
    Route::get('/general-report', 'Admin\PageController@generalreport')->name('generalreport');

    Route::get('/add-general-report', 'Admin\PageController@addgeneralreport')->name('addgeneralreport');

    Route::post('/save-general-report', 'Admin\PostController@savegeneral')->name('savegeneral');

    Route::get('/general-report-detail/{id}', 'Admin\PageController@generalreportdetail')->name('generalreportdetail');

    Route::get('/delete-general-report/{id}', 'Admin\PageController@deletegeneralreport')->name('deletegeneralreport');

    Route::get('/edit-general-report/{id}', 'Admin\PageController@editgeneralreport')->name('editgeneralreport');

    Route::get('/update-general-report/{id}', 'Admin\PostController@updategeneralreport')->name('updategeneralreport');


    // Financial Report Routes
    Route::get('/financial-report', 'Admin\PageController@financialreport')->name('financialreport');

    Route::get('/add-financial-report', 'Admin\PageController@addfinancialreport')->name('addfinancialreport');

    Route::post('/save-financial-report', 'Admin\PostController@savefinancial')->name('savefinancial');

    Route::get('/financial-report-detail/{id}', 'Admin\PageController@financialreportdetail')->name('financialreportdetail');

    Route::get('/delete-financial-report/{id}', 'Admin\PageController@deletefinancialreport')->name('deletefinancialreport');

    Route::get('/edit-financial-report/{id}', 'Admin\PageController@editfinancialreport')->name('editfinancialreport');

    Route::get('/update-financial-report/{id}', 'Admin\PostController@updatefinancialreport')->name('updatefinancialreport');


    // event routes
    Route::get('/events', 'Admin\PageController@event')->name('event');

    Route::get('/add-event', 'Admin\PageController@addevent')->name('addevent');

    Route::post('/save-event', 'Admin\PostController@saveevent')->name('saveevent');

    Route::get('/archived-event', 'Admin\PageController@archiveevent')->name('archiveevent');

    Route::get('/activate-event/{id}', 'Admin\PageController@activateevent')->name('activateevent');

    Route::get('/deactivate-event/{id}', 'Admin\PageController@deactivateevent')->name('deactivateevent');
    

});

//=======Student=======//
Route::group([ 'middleware' => 'web', 'prefix' => 'student', 'before' => 'student' ], function(){

    Route::get('/', 'Student\PageController@dashboard')->name('studentdashboard');

    Route::get('/events', 'Student\PageController@event')->name('event');

    Route::get('/add-profile', 'Student\PageController@addprofile')->name('addprofile');

    Route::get('/my-profile', 'Student\PageController@studentprofile')->name('studentprofile');

    Route::post('/save-profile', 'Student\PostController@saveprofile')->name('saveprofile');

    Route::get('/edit-profile/{id}', 'Student\PageController@editprofile')->name('editprofile');

    Route::get('/update-profile/{id}', 'Student\PostController@updateprofile')->name('updateprofile');


});