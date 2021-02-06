<?php

Route::get('/', function () {
  return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/calculator', ['as' => 'calculator', 'uses' => 'Controller@calculator']);
Route::get('/calculation', ['as' => 'calculation', 'uses' => 'Controller@calculation']);

Route::group(['middleware' => 'guest'], function () {

  // New Student Registeration
  Route::post('newStudentRegister', 'studentsController@store');
  
  // New Job Application
  Route::get('/jobApp', 'StaffController@jobApp');
  Route::post('jobApp', 'StaffController@jobAppEmail');

  // New Staff Registration
  Route::get('/staffApp', 'StaffController@staffApp');
  Route::post('staffReg', 'StaffController@store');

});

Route::group(['middleware' => 'verified'], function () {

  // Models Controllers
  Route::resource('years', 'yearsController');
  Route::resource('attendances', 'attendancesController');
  Route::resource('sems', 'semsController');
  Route::resource('levels', 'levelsController');
  Route::resource('classrooms', 'classroomsController');
  Route::resource('days', 'daysController');
  Route::resource('times', 'timesController');
  Route::resource('statuses', 'statusController');
  Route::resource('courses', 'coursesController');
  Route::resource('marks', 'marksController');
  Route::resource('markstypes', 'markstypesController');
  Route::resource('sches', 'schesController');
  Route::resource('students', 'studentsController');
  Route::resource('users', 'usersController');
  Route::resource('roles', 'rolesController');
  Route::resource('exams', 'examsController');
  Route::resource('applicants', 'applicantsController');
  Route::resource('upgradestudents', 'upgradestudentsController');
  Route::resource('relatives', 'relativesController');
  Route::resource('results', 'resultsController');
  Route::resource('notifications', 'notificationsController');
  Route::resource('staff', 'staffController');
  Route::resource('sFinancials', 'studentsFinancialsController');
  Route::resource('sfCategories', 'studentsFinancialsCategoriesController');
  Route::resource('sfDiscounts', 'studentsFinancialsDiscountsController');
  Route::resource('batches', 'batchesController');
  Route::resource('sPayments', 'studentsPaymentsController');

  Route::get('/dashboard', 'HomeController@index');
  Route::get('/profile', 'usersController@index');

  // Complain Form
  Route::post('complain', 'marksController@complain');
  
  // Evaluation Form
  Route::Post('evaluate', 'HomeController@evaluate');
  
  // Update Data Forms
  Route::post('updateUrequest', 'usersController@requestupdate');
  Route::post('updateRrequest', 'relativesController@requestupdate');
  
  // Documentation Views
  Route::get('/Docapplicants', 'Controller@applicantsDoc');
  Route::get('/Docstudents', 'Controller@studentsDoc');
  Route::get('/Docstaff', 'Controller@staffDoc');
  Route::get('/Docmanagement', 'Controller@managementDoc');
  Route::get('/Docadmin', 'Controller@adminDoc');

  // Dynmic Depndant Fields
  Route::get('/dynamicClassroom', ['as' => 'dynamicClassroom', 'uses' => 'schesController@dynamicClassroom']);
  Route::get('/dynamicClassroomByTitle', ['as' => 'dynamicClassroomByTitle', 'uses' => 'schesController@dynamicClassroomByTitle']);
  Route::get('/dynamicCourse', ['as' => 'dynamicCourse', 'uses' => 'schesController@dynamicCourse']);
  Route::get('/dynamicStudents', ['as' => 'dynamicStudents', 'uses' => 'marksController@dynamicStudents']);
  Route::get('/dynamicStudentsByTitle', ['as' => 'dynamicStudentsByTitle', 'uses' => 'marksController@dynamicStudentsByTitle']);
  
  Route::get('/dynamicMarkType', ['as' => 'dynamicMarkType', 'uses' => 'marksController@dynamicMarkType']);
  Route::get('/dynamicMarkTypeUsed', ['as' => 'dynamicMarkTypeUsed', 'uses' => 'marksController@dynamicMarkTypeUsed']);
  Route::get('/dynamicMarkTypesUsed', ['as' => 'dynamicMarkTypesUsed', 'uses' => 'marksController@dynamicMarkTypesUsed']);
  Route::get('/dynamicMarkT', ['as' => 'dynamicMarkT', 'uses' => 'markstypesController@dynamicMarkT']);
  
  Route::get('/dynamicSFCategory', ['as' => 'dynamicSFCategory', 'uses' => 'Controller@dynamicSFCategory']);
  Route::get('/dynamicSFDiscount', ['as' => 'dynamicSFDiscount', 'uses' => 'Controller@dynamicSFDiscount']);
  Route::get('/dynamicFCategoryOfStudent', ['as' => 'dynamicFCategoryOfStudent', 'uses' => 'Controller@dynamicFCategoryOfStudent']);
  
  Route::get('/dynamicCoursesOfTeacher', ['as' => 'dynamicCoursesOfTeacher', 'uses' => 'Controller@dynamicCoursesOfTeacher']);
  Route::get('/dynamicClassroomsOfSupervisor', ['as' => 'dynamicClassroomsOfSupervisor', 'uses' => 'Controller@dynamicClassroomsOfSupervisor']);
  Route::get('/dynamiclevel_id', ['as' => 'dynamiclevel_id', 'uses' => 'Controller@dynamiclevel_id']);
  Route::get('/dynamictitle', ['as' => 'dynamictitle', 'uses' => 'Controller@dynamictitle']);
  
  // Instant Updates
  Route::get('/financialUpdate', ['as' => 'financialUpdate', 'uses' => 'upgradestudentsController@financialUpdate']);
  Route::get('/classroomUpdate', ['as' => 'classroomUpdate', 'uses' => 'upgradestudentsController@classroomUpdate']);
  Route::get('/statusUpdate', ['as' => 'statusUpdate', 'uses' => 'upgradestudentsController@statusUpdate']);
  Route::get('/sponsorUpdate', ['as' => 'sponsorUpdate', 'uses' => 'upgradestudentsController@sponsorUpdate']);
  Route::get('/tuitionfreqUpdate', ['as' => 'tuitionfreqUpdate', 'uses' => 'upgradestudentsController@tuitionfreqUpdate']);
  Route::get('/gradntedDiscountsUpdate', ['as' => 'gradntedDiscountsUpdate', 'uses' => 'upgradestudentsController@gradntedDiscountsUpdate']);
  Route::get('/exceptedCoursesUpdate', ['as' => 'exceptedCoursesUpdate', 'uses' => 'upgradestudentsController@exceptedCoursesUpdate']);
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
  Route::get('/transcript', ['as' => 'transcript', 'uses' => 'resultsController@transcript']);
  Route::get('/sfStatement', ['as' => 'sfStatement', 'uses' => 'studentsFinancialsController@sfStatement']);
  Route::get('/sfReports', ['as' => 'sfReports', 'uses' => 'studentsFinancialsController@sfReports']);

});