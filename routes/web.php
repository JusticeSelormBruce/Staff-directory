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
Auth::routes();
Route::get('register', 'RegisterUserController@index');
Route::post('register', 'RegisterUserController@Register');

Route::get('login', 'LoginUserController@index');
Route::post('User-Login', 'LoginUserController@LoginUser');

Route::get('profile', 'StaffController@ProfileIndex');
Route::patch('profile', 'StaffController@UpdateProfile');

Route::get('reset', 'StaffController@ResetPasswordIndex');
Route::patch('reset', 'StaffController@ResetPassword');

Route::get('Staff-Dashboard', 'StaffController@index');
Route::get('biography', 'StaffController@BiographyIndex');
Route::get('Achievements', 'StaffController@AchievementsIndex');
Route::get('Employments', 'StaffController@EmploymentsIndex');
Route::get('Qualifications', 'StaffController@QualificationsIndex');
Route::get('Specialization', 'StaffController@SpecializationIndex');
Route::get('Research-Interest', 'StaffController@Research_InterestIndex');
Route::get('Institutions', 'StaffController@InstitutionsIndex');
Route::get('Positions', 'StaffController@PositionsIndex');
Route::get('Profession', 'StaffController@ProfessionIndex');
Route::get('Project', 'StaffController@ProjectIndex');
Route::get('Association', 'StaffController@AssociationIndex');
Route::get('Articles', 'StaffController@ArticleIndex');
Route::get('Publications', 'StaffController@PublicationsIndex');
Route::get('cv', 'StaffController@CVIndex');
Route::get('Awards', 'StaffController@AwardsIndex');
Route::get('Awards', 'StaffController@AwardsIndex');
Route::post('create-bio', 'StaffController@SaveBio');
Route::patch('update-bio', 'StaffController@UpdateBio');
Route::post('Achievements', 'StaffController@SaveAchievements');
Route::patch('update-Achievements', 'StaffController@UpdateAchievements');
Route::post('Employments', 'StaffController@SaveEmployments');
Route::patch('update-Employments', 'StaffController@UpdateEmployments');
Route::post('Qualifications', 'StaffController@SaveQualifications');
Route::patch('update-Qualification', 'StaffController@UpdateQualifications');
Route::post('Specialization', 'StaffController@SaveSpecialization');
Route::patch('update-Specialization', 'StaffController@UpdateSpecialization');
Route::post('Research-Interest', 'StaffController@SaveResearchInterest');
Route::patch('update-Research-Interest', 'StaffController@UpdateResearchInterest');
Route::post('Institutions', 'StaffController@SaveInstitutions');
Route::patch('update-Institutions', 'StaffController@UpdateInstitutions');
Route::post('Positions', 'StaffController@SavePositions');
Route::patch('update-Positions', 'StaffController@UpdatePositions');
Route::post('Profession', 'StaffController@SaveProfession');
Route::patch('update-Profession', 'StaffController@UpdateProfession');
Route::post('Project', 'StaffController@SaveProject');
Route::patch('update-Project', 'StaffController@UpdateProject');
Route::post('Association', 'StaffController@SaveAssociation');
Route::patch('update-Association', 'StaffController@UpdateAssociation');
Route::post('Articles', 'StaffController@SaveArticles');
Route::patch('update-Articles', 'StaffController@UpdateArticles');
Route::post('Publications', 'StaffController@SavePublications');
Route::patch('update-Publications', 'StaffController@UpdatePublications');
Route::post('Awards', 'StaffController@SaveAwards');
Route::patch('update-Awards', 'StaffController@UpdateAwards');
Route::post('cv', 'StaffController@SaveCV');
Route::patch('cv-Update', 'StaffController@Updatecv');

Route::get('Admin-Dashboard', 'AdminController@index');
Route::get('account-reset', 'AdminController@AccountReset');
Route::get('Write-News', 'AdminController@NewIndex');
Route::post('account-reset', 'AdminController@ResetAccount');
Route::post('Publish-News', 'AdminController@WriteNews');
Route::patch('update-News', 'AdminController@UpdateNews');


Route::get('more', 'MoreController@index')->name('read.more');
Route::get('index_achievement','MoreController@index_achievement');
Route::get('index_articles','MoreController@index_articles');
Route::get('index_associations','MoreController@index_associations');
Route::get('index_awards','MoreController@index_awards');
Route::get('index_cv','MoreController@index_cv');
Route::get('index_employments','MoreController@index_employments');
Route::get('index_institution','MoreController@index_institution');
Route::get('index_position','MoreController@index_position');
Route::get('index_profession','MoreController@index_profession');
Route::get('index_projects','MoreController@index_projects');
Route::get('index_publications','MoreController@index_publications');
Route::get('index_qualifications','MoreController@index_qualifications');
Route::get('index_research','MoreController@index_research');
Route::get('index_specialization','MoreController@index_specialization');


Route::get('/search_results','MoreController@post');
Route::post('/search_results','MoreController@post');


Route::get('staff-details','StaffDetailsController@index');
Route::post('staff-details','StaffDetailsController@getUser');
Route::get('view-user/{id}','StaffDetailsController@viewUser')->name('user.view');

