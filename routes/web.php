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
Route::group(['prefix'=>'frontend'],function(){


Route::get('/','frontend_controller@index')->name('index.frontend');
//project
Route::get('/projects/','frontend_controller@project')->name('project.frontend');
//search for project
Route::get('search/project','frontend_controller@search')->name('search.project');
//single project
Route::get('project/{slug}','frontend_controller@single')->name('single.project');
//single category
Route::get('category/{id}','frontend_controller@category')->name('category.project');
//single tag
Route::get('tags/{id}','frontend_controller@tag')->name('tag.project');
//partner page
Route::get('partners','frontend_controller@partner')->name('partner.frontend');
//service
//service list
Route::get('service/list','frontend_controller@service')->name('service.list');
//expert form
Route::get('expert/form','frontend_controller@expert_form')->name('expert.form');
/////contact_us
Route::get('contactus','frontend_controller@contact_us')->name('contact');
/////About
//about
Route::get('about','frontend_controller@about')->name('about');
// adviser list
Route::get('adviser/list','frontend_controller@adviser_list')->name('adviser.list');
});

Auth::routes();


//home
Route::get('/home', 'HomeController@index')->name('home');

//route group
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
//create news
Route::get('create/news','News_controller@create')->name('news.create');
//show news
Route::get('show/news','News_controller@index')->name('news.index');
//store news
Route::post('store/news','News_controller@store')->name('news.store');
//delete news
Route::get('delete/news/{id}','News_controller@destroy')->name('news.delete');
//edit news
Route::get('edit/news/{id}','News_controller@edit')->name('news.edit');
//update news
Route::post('update/news/{id}','News_controller@update')->name('news.update');
///////////////////////////////////
//craete category
Route::get('create/category','Category_controller@create')->name('category.create');
//store category
Route::get('store/category','Category_controller@store')->name('category.store');
//show categories
Route::get('categories','Category_controller@index')->name('category.index');
//delete category
Route::get('delete//{id}','Category_controller@destroy')->name('category.delete');
//edit category
Route::get('edit/category/{id}','Category_controller@edit')->name('category.edit');
//update
Route::post('update/category/{id}','Category_controller@update')->name('category.update');
///////////////////////////Project/////////////////
//create project
Route::get('create/project','Project_controller@create')->name('project.create');
//store project
Route::post('store/project','Project_controller@store')->name('project.store');
//show prpjects
Route::get('allprojects','Project_controller@index')->name('project.index');
//delete project
Route::get('delete/project/{id}','Project_controller@destroy')->name('project.destroy');
//edit project
Route::get('edit/project/{id}','Project_controller@edit')->name('project.edit');
//update category
Route::post('update/prroject/{id}','Project_controller@update')->name('project.update');
/////////////////////////Aucation/////////
//create aucation
Route::get('create/aucation','Aucation_controller@create')->name('aucation.create');
//store aucation
Route::post('store/aucation','Aucation_controller@store')->name('aucation.store');
//show all aucations
Route::get('ALLaucations','Aucation_controller@index')->name('aucation.index');
//edit aucation
Route::get('edit/aucation/{id}','Aucation_controller@edit')->name('aucation.edit');
//Update Aucation
Route::post('update/aucation/{id}','Aucation_controller@update')->name('aucation.update');
//delete aucation
Route::get('delete/aucation/{id}','Aucation_controller@destroy')->name('aucation.delete');
///////////////////////////////////////Setting/////////
//setting
Route::get('setting','Setting_controller@index')->name('setting.index');
//update setting
Route::post('update/setting','Setting_controller@update')->name('setting.update');
////////////////////////Tags//////////
//create tag
Route::get('create/tag','Tag_controller@create')->name('tag.create');
//store tag
Route::post('store/tag','Tag_controller@store')->name('tag.store');
//show all tags
Route::get('ALLTags','Tag_controller@index')->name('tag.index');
//delete tag
Route::get('delete/tag/{id}','Tag_controller@destroy')->name('tag.delete');
//edit tag
Route::get('edit/tag/{id}','Tag_controller@edit')->name('tag.edit');
/////update tag
Route::post('update/tag/{id}','Tag_controller@update')->name('tag.update');
/////////////user profile
Route::get('add/user','User_controller@create')->name('user.add');
//store admin
Route::post('store/user','User_controller@store')->name('user.store');
//show users
Route::get('show/users','User_controller@index')->name('user.index');
//remove permession
Route::get('delete/admin/{id}','User_controller@not_admin')->name('user.not.admin');
//make permession
Route::get('make/admin/{id}','User_controller@admin')->name('user.admin');
///////////////////////User Profile///////
//User profile setting
Route::get('user/profile','Profile_controller@index')->name('profile.user');
//update user profile
Route::post('user/profile/update','Profile_controller@update')->name('profile.update');

});