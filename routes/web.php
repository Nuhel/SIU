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
    return view('index');
});

Route::get('/secondHome', function () {

    return view('index_1');
});


//   Department
Route::get('/','HomeController@index')->name('home.index');
Route::get('/department/computer-science-and-engineering','DepartmentController@computer_science_and_engineering')->name('dept.cse');
Route::get('/department/computer-science-and-informatics','DepartmentController@computer_science_and_informatics')->name('dept.csi');
Route::get('/department/english','DepartmentController@english')->name('dept.english');
Route::get('/department/business-administration','DepartmentController@business_administration')->name('dept.bba');
Route::get('/department/law','DepartmentController@law')->name('dept.law');
Route::get('/department/electronics-and-communication-engineering','DepartmentController@electronics_and_communication_engineering')->name('dept.ece');

//   Authority
Route::get('/authority/board-of-trustees','AuthoritiesController@board_of_trustees')->name('authority.bot');

//    Academic

Route::get('/academic/school','AcademicController@school')->name('academic.school');
Route::get('/academic/academic-calendar','AcademicController@academic_calendar')->name('academic.calendar');
Route::get('/academic/library','AcademicController@library')->name('academic.library');
Route::get('/academic/syllabus','AcademicController@syllabus')->name('academic.syllabus');

//     Admission
Route::get('/admission/tuition-fees','AdmisionController@tuition_fee')->name('admission.tuition_fees');
Route::get('/admission/waiver-information','AdmisionController@waiver_information')->name('admission.waiver_information');
Route::get('/admission/graduate','AdmisionController@graduate')->name('admission.graduate');
Route::get('/admission/undergraduate','AdmisionController@undergraduate')->name('admission.undergraduate');
Route::get('/admission/accommodation','AdmisionController@accommodation')->name('admission.accommodation');

//  Resources
Route::get('/software-lab','ResourcesController@software_lab')->name('software_lab');

//  Society

Route::get('/society/cse-society','SocietiesController@cse_society')->name('society.cse');
Route::get('/alumni-association','SocietiesController@alumni')->name('society.alumni');


//    Gallery

Route::get('/gallery','GalleriesController@gallery')->name('gallery');



















Route::get('/search_result_page', function () {
    return view('pages.search_result_page');
});
Route::get('/student_profile', function () {
    return view('pages.student_profile');
});

Route::get('/single_event', function () {
    return view('pages.single_event');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/all_events', function () {
    return view('pages.all_events');
});

Route::get('/curriculam', function () {
    return view('pages.curriculam');
});

Route::get('/single_teachers', function () {
    return view('pages.single_teachers');
});






Route::get('/single_notice', function () {
    return view('pages.single_notice');
});
Route::get('/all_notice', function () {
    return view('pages.all_notice');
});

Route::get('/teachers_profile', function () {
    return view('pages.teachers_profile');
});

Route::get('/single_department', function () {
    return view('pages.single_department');
});
Route::get('/g_suite', function () {
    return view('pages.g_suite');
});



Route::get('/gallery_single', function () {

    return view('pages.gallery_single');
});

Route::get('/chairman', function () {

    return view('pages.chairman');
});

Route::get('/teachers', function () {

    return view('pages.teachers');
});

Route::get('/vc', function () {

    return view('pages.vc');
});

Route::get('/at_a_glance', function () {

    return view('pages.at_a_glance');
});






//Student Control Starts

Route::get('/studentLogin', 'StudentLoginController@index')->name('studentLogin');
Route::get('/studentLogout', 'StudentLoginController@getStudentLogout')->name('studentLogout');
Route::get('/studentProfile', 'StudentLoginController@getProfile')->name('Profile');
Route::post('/studentLogin', 'StudentLoginController@getLogin')->name('studentLoginConfirm');
Route::get('/passwordReset', 'StudentLoginController@ForGotPasswordRedirect')->name('passwordReset');
Route::post('/passwordReset', 'StudentLoginController@ForGotPassword')->name('passwordResetConfirm');
Route::post('/passwordResetConfirmPass', 'StudentLoginController@ResetPassword')->name('passwordResetConfirmPass');
//Student Control Ends
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/logout', 'DashboardController@getLogout')->name('logout');
    });

Route::group(['middleware' => ['auth', 'department']], function () {
//Student Info Departmental Start//

Route::get('dashboard/DepartmentalStudents/{discipline}', 'StudentInfoController@DepartmentalStudents')->name('DepartmentalStudents');
Route::get('dashboard/declareResult/{id}', 'ResultController@index')->name('declareResult');
Route::post('dashboard/declareResult/', 'ResultController@store');
Route::get('/fetchSubjects', 'SubjectController@fetch')->name('fetchSubjects');
Route::get('/dashboard/DepartmentalStudents/search/{discipline}', 'StudentInfoController@departmentalStudentSearch')->name('departmentalStudentsSearch');
Route::get('dashboard/declareCustomizeResult/{id}', 'ResultController@indexCustom')->name('declareCustomizeResult');
//StudentProfile Start
    Route::get('dashboard/studentProfile/{id}', 'StudentProfileController@index')->name('studentProfile');
//StudentProfile End



//    Notice

    Route::post('/deleteNotice', 'NoticeController@destroy');
    Route::get('/dashboard/notice/search/', 'NoticeController@SearchNotice')->name('noticeSearch');
    Route::get('dashboard/notice','NoticeController@create')->name('create.notice');
    Route::post('dashboard/notice','NoticeController@store')->name('store.notice');
    Route::get('dashboard/all_notice','NoticeController@index')->name('show.all_notice');
    Route::get('dashboard/edit_notice/{id}','NoticeController@edit')->name('edit.notice');
    Route::post('dashboard/update_notice/{id}','NoticeController@update')->name('update.notice');

//    Event
    Route::post('/deleteEvent', 'EventController@destroy');
    Route::get('/dashboard/event/search/', 'EventController@SearchEvent')->name('eventSearch');
    Route::get('dashboard/event','EventController@create')->name('create.event');
    Route::post('dashboard/event','EventController@store')->name('store.event');
    Route::get('dashboard/all_event','EventController@index')->name('show.all_event');
    Route::get('dashboard/edit_event/{id}','EventController@edit')->name('edit.event');
    Route::post('dashboard/update_event/{id}','EventController@update')->name('update.event');


});


Route::group(['middleware' => ['auth', 'admin']], function () {

  //    Teachers
     Route::post('/deleteTeacher', 'TeachersController@destroy');
        Route::get('/dashboard/teacher/search/', 'TeachersController@SearchTeacher')->name('teacherSearch');
    Route::get('dashboard/create_teacher','TeachersController@create')->name('create.teacher');
    Route::post('dashboard/store_teacher','TeachersController@store')->name('store.teacher');
    Route::get('dashboard/all_teacher','TeachersController@index')->name('show.all_teacher');
    Route::get('dashboard/all_teacher/{id}','TeachersController@edit')->name('edit.teacher');
    Route::post('dashboard/update_teacher/{id}','TeachersController@update')->name('update.teacher'); 
   //Department Control

    Route::get('/dashboard/DepartmentalResult/search/{discipline}', 'ResultController@departmentalResultSearch')->name('DepartmentalResult');
    Route::get('/dashboard/DepartmentalResult/{discipline}', 'ResultController@showResult')->name('DepartmentalResult');
   
   
    //Student Info Authority Start//

Route::get('dashboard/addStudentInformation', 'StudentInfoController@index')->name('addStudentInformation');
Route::post('dashboard/addStudentInformation', 'StudentInfoController@store');
Route::get('dashboard/updateStudentInformation/{id}', 'StudentInfoController@updaterequest')->name('updateStudentInformation');
Route::post('/deleteStudentInformation', 'StudentInfoController@destroy');
Route::post('/dashboard/updateStudentInformation/', 'StudentInfoController@update');
Route::get('/dashboard/allStudents', 'StudentInfoController@AllStudents')->name('allStudents');
Route::get('/dashboard/allStudents/search', 'StudentInfoController@studentInformationSearch')->name('studentInformationSearch');

//Student Info Authority End//

//Subject Info Start//

Route::get('dashboard/addSubject', 'SubjectController@index')->name('addSubject');
Route::post('dashboard/addSubject', 'SubjectController@store');
Route::get('/dashboard/allSubjects', 'SubjectController@AllSubjects')->name('allSubjects');
Route::post('/deleteSubject', 'SubjectController@destroy');
Route::get('/dashboard/allSubjects/search', 'SubjectController@subjectSearch')->name('subjectSearch');
Route::get('dashboard/updateSubject/{id}', 'SubjectController@updateSubject')->name('updateSubject');
Route::post('/dashboard/updateSubject/', 'SubjectController@update');

//Subject Info End//


//Student Info End//


   

});


