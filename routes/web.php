<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->middleware('verified');
Route::get('/profile', 'usersController@index')->middleware('verified');
Route::get('/calculator', ['as' => 'calculator', 'uses' => 'Controller@calculator']);

Route::resource('years', 'yearsController')->middleware(['verified', 'can:viewAny, App\Models\years']);
Route::resource('attendances', 'attendancesController')->middleware(['verified', 'can:viewAny, App\Models\attendances']);
Route::resource('sems', 'semsController')->middleware(['verified', 'can:viewAny, App\Models\sems']);
Route::resource('levels', 'levelsController')->middleware(['verified', 'can:viewAny, App\Models\levels']);
Route::resource('classrooms', 'classroomsController')->middleware(['verified', 'can:viewAny, App\Models\classrooms']);
Route::resource('days', 'daysController')->middleware(['verified', 'can:viewAny, App\Models\days']);
Route::resource('times', 'timesController')->middleware(['verified', 'can:viewAny, App\Models\times']);
Route::resource('statuses', 'statusController')->middleware(['verified', 'can:viewAny, App\Models\statuses']);
Route::resource('courses', 'coursesController')->middleware(['verified', 'can:viewAny, App\Models\courses']);
Route::resource('marks', 'marksController')->middleware(['verified', 'can:viewAny, App\Models\marks']);
Route::resource('markstypes', 'markstypesController')->middleware(['verified', 'can:viewAny, App\Models\markstypes']);
Route::resource('sches', 'schesController')->middleware(['verified', 'can:viewAny, App\Models\sches']);
Route::resource('students', 'studentsController')->middleware(['verified', 'can:viewAny, App\Models\student']);
Route::resource('users', 'usersController')->middleware(['verified', 'can:viewAny, App\Models\users']);
Route::resource('roles', 'rolesController')->middleware(['verified', 'can:viewAny, App\Models\roles']);
Route::resource('exams', 'examsController')->middleware(['verified', 'can:viewAny, App\Models\exams']);
Route::resource('applicants', 'applicantsController')->middleware(['verified', 'can:viewAny, App\Models\student']);
Route::resource('upgradestudents', 'upgradestudentsController')->middleware(['verified', 'can:upgrade, App\Models\student']);
Route::resource('relatives', 'relativesController')->middleware(['verified', 'can:viewAny, App\Models\relatives']);
Route::resource('results', 'resultsController')->middleware(['verified', 'can:viewAny, App\Models\roles']);
Route::resource('notifications', 'notificationsController')->middleware('verified');
Route::resource('staff', 'staffController')->middleware(['verified', 'can:viewAny, App\Models\staff']);
Route::resource('sFinancials', 'studentsFinancialsController')->middleware(['verified', 'can:viewAny, App\Models\studentsFinancials']);
Route::resource('sfCategories', 'studentsFinancialsCategoriesController')->middleware(['verified', 'can:viewAny, App\Models\studentsFinancialsCategories']);
Route::resource('sfDiscounts', 'studentsFinancialsDiscountsController')->middleware(['verified', 'can:viewAny, App\Models\studentsFinancialsDiscounts']);
Route::resource('batches', 'batchesController')->middleware(['verified', 'can:viewAny, App\Models\batches']);
Route::resource('sPayments', 'studentsPaymentsController')->middleware(['verified', 'can:viewAny, App\Models\studentsPayments']);

// Dynmic Depndant Fields
Route::get('/dynamicClassroom', ['as' => 'dynamicClassroom', 'uses' => 'schesController@dynamicClassroom']);
Route::get('/dynamicCourse', ['as' => 'dynamicCourse', 'uses' => 'schesController@dynamicCourse']);
Route::get('/dynamicStudents', ['as' => 'dynamicStudents', 'uses' => 'marksController@dynamicStudents']);
Route::get('/dynamicMarkType', ['as' => 'dynamicMarkType', 'uses' => 'marksController@dynamicMarkType']);
Route::get('/dynamicMarkTypeUsed', ['as' => 'dynamicMarkTypeUsed', 'uses' => 'marksController@dynamicMarkTypeUsed']);
Route::get('/dynamicMarkTypesUsed', ['as' => 'dynamicMarkTypesUsed', 'uses' => 'marksController@dynamicMarkTypesUsed']);
Route::get('/dynamicMarkT', ['as' => 'dynamicMarkT', 'uses' => 'markstypesController@dynamicMarkT']);
Route::get('/dynamicSFCategory', ['as' => 'dynamicSFCategory', 'uses' => 'Controller@dynamicSFCategory']);
Route::get('/dynamicSFDiscount', ['as' => 'dynamicSFDiscount', 'uses' => 'Controller@dynamicSFDiscount']);

Route::get('/dynamicCoursesOfTeacher', ['as' => 'dynamicCoursesOfTeacher', 'uses' => 'Controller@dynamicCoursesOfTeacher']);
Route::get('/dynamicClassroomsOfSupervisor', ['as' => 'dynamicClassroomsOfSupervisor', 'uses' => 'Controller@dynamicClassroomsOfSupervisor']);
Route::get('/dynamiclevel_id', ['as' => 'dynamiclevel_id', 'uses' => 'Controller@dynamiclevel_id']);
Route::get('/dynamictitle', ['as' => 'dynamictitle', 'uses' => 'Controller@dynamictitle']);

// Instant Updates
Route::get('/financialUpdate', ['as' => 'financialUpdate', 'uses' => 'upgradestudentsController@financialUpdate']);
Route::get('/classroomUpdate', ['as' => 'classroomUpdate', 'uses' => 'upgradestudentsController@classroomUpdate']);
Route::get('/statusUpdate', ['as' => 'statusUpdate', 'uses' => 'upgradestudentsController@statusUpdate']);
Route::get('/studentNoUpdate', ['as' => 'studentNoUpdate', 'uses' => 'upgradestudentsController@studentNoUpdate']);
Route::get('/applicantUpdate', ['as' => 'applicantUpdate', 'uses' => 'upgradestudentsController@update']);

// Results Generation
Route::get('/currentSem', ['as' => 'currentSem', 'uses' => 'resultsController@currentSem']);
Route::get('/alllevels', ['as' => 'alllevels', 'uses' => 'resultsController@alllevels']);
Route::get('/activeclassrooms', ['as' => 'activeclassrooms', 'uses' => 'resultsController@activeclassrooms']);
Route::get('/activestudents', ['as' => 'activestudents', 'uses' => 'resultsController@activestudents']);
Route::get('/activecourses', ['as' => 'activecourses', 'uses' => 'resultsController@activecourses']);
Route::get('/marksntypes', ['as' => 'marksntypes', 'uses' => 'resultsController@marksntypes']);
Route::post('/resultstore', ['as' => 'resultstore', 'uses' => 'resultsController@store']);

// PDF Generators
Route::get('/studentConf', ['as' => 'confLetter', 'uses' => 'studentsController@confLetter']);

// New Student Registeration
Route::post('newStudentRegister', 'studentsController@store');

// New Job Application
Route::get('/jobApp', 'StaffController@jobApp');
Route::post('jobApp', 'StaffController@jobAppEmail');

// New Staff Registration
Route::get('/staffApp', 'StaffController@staffApp')->middleware('guest');
Route::post('staffReg', 'StaffController@store')->middleware('guest');

// Complain Form
Route::post('complain', 'marksController@complain')->middleware('verified');

// Evaluation Form
Route::Post('evaluate', 'HomeController@evaluate')->middleware('verified');

// Update Data Forms
Route::post('updateUrequest', 'usersController@requestupdate')->middleware('verified');
Route::post('updateRrequest', 'relativesController@requestupdate')->middleware('verified');

// Documentation Views
Route::get('/Docapplicants', 'Controller@applicantsDoc')->middleware('verified');
Route::get('/Docstudents', 'Controller@studentsDoc')->middleware('verified');
Route::get('/Docstaff', 'Controller@staffDoc')->middleware('verified');
Route::get('/Docmanagement', 'Controller@managementDoc')->middleware('verified');
Route::get('/Docadmin', 'Controller@adminDoc')->middleware('verified');