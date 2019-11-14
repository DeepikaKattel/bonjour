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

Route::get('/', 'IndexController@home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/table', 'MemberController@table')->name('table');
Route::get('/edit/{id}', 'MemberController@edit')->name('edit');
Route::get('/create', 'MemberController@create')->name('create');
Route::post('/store', 'MemberController@store')->name('store');
Route::post('/update/{id}', 'MemberController@update')->name('update');
Route::get('/delete/{id}', 'MemberController@destroy')->name('delete');

Route::resource('/services', 'ServiceController');
Route::get('/services/destroy/{id}', 'ServiceController@delete')->name('s.destroy');

Route::get('/createc', 'CareerController@create')->name('career/create');
Route::post('/save', 'CareerController@store')->name('save');


// Route::get('/index2', 'WhyController@index')->name('whyindex');
Route::get('/introduction','WhyController@index')->name('introduction');
Route::get('/create2', 'WhyController@create')->name('whycreate');
Route::get('/edit2/{id}', 'WhyController@edit')->name('whyedit');
Route::get('/delete2/{id}', 'WhyController@delete')->name('whydelete');
Route::post('/update2/{id}', 'WhyController@update')->name('whyupdate');
Route::post('/store2','WhyController@store')->name('whystore');

Route::get('/vision&mission','VisionController@index')->name('vision');
Route::get('/create3', 'VisionController@create')->name('visioncreate');
Route::get('/edit3/{id}', 'VisionController@edit')->name('visionedit');
Route::get('/delete3/{id}', 'VisionController@delete')->name('visiondelete');
Route::post('/update3/{id}', 'VisionController@update')->name('visionupdate');
Route::post('/store3','VisionController@store')->name('visionstore');

Route::get('/add_points', 'VisionPointsController@create')->name('pointscreate');
Route::get('/edit_points/{id}', 'VisionPointsController@edit')->name('pointsedit');
Route::get('/delete_points/{id}', 'VisionPointsController@delete')->name('pointsdelete');
Route::post('/update_points/{id}', 'VisionPointsController@update')->name('pointsupdate');
Route::post('/store_points','VisionPointsController@store')->name('pointsstore');

Route::get('/job','CareersController@index')->name('job');
Route::get('/career_create', 'CareersController@create')->name('careercreate');
Route::get('/career_edit/{id}', 'CareersController@edit')->name('careeredit');
Route::get('/career_delete/{id}', 'CareersController@delete')->name('careerdelete');
Route::post('/career_update/{id}', 'CareersController@update')->name('careerupdate');
Route::post('/career_store','CareersController@store')->name('careerstore');

Route::get('/news','NewsController@index')->name('news');
Route::get('/news_create', 'NewsController@create')->name('newscreate');
Route::get('/news_edit/{id}', 'NewsController@edit')->name('newsedit');
Route::get('/news_delete/{id}', 'NewsController@delete')->name('newsdelete');
Route::post('/news_update/{id}', 'NewsController@update')->name('newsupdate');
Route::post('/news_store','NewsController@store')->name('newsstore');

Route::get('/terms','TermsPrivacyController@terms')->name('termsview');
Route::get('/privacy','TermsPrivacyController@privacy')->name('privacyview');

Route::post('/save', 'CareerController@store')->name('save');
Route::get('/create/career', 'CareerController@create')->name('career/create');


Route::resource('/information', 'InformationController');
Route::get('/information/destroy/{id}', 'InformationController@destroy')->name('i.destroy');

Route::resource('/contactus', 'ContactUsController');
Route::get('/contactus/destroy/{id}', 'ContactUsController@destroy')->name('c.destroy');

Route::get('/coverage/announcement', 'AnnouncementController@announcement')->name('coverage/announcement');
Route::get('/coverage/gallery', 'GalleryController@gallery')->name('coverage/gallery');
Route::get('/coverage/newscontent', 'NewsController@news')->name('coverage/newscontent');


Route::resource('/announcement', 'AnnouncementController');
Route::get('/announcement/destroy/{id}', 'AnnouncementController@destroy')->name('a.destroy');

Route::resource('/galleries', 'GalleryController');

Route::get('/galleries/destroy/{id}', 'GalleryController@destroy')->name('g.destroy');


Route::get('/coveragetable', 'CoverageController@index')->name('coveragetable');
Route::get('/coveragecreate', 'CoverageController@create')->name('coveragecreate');
Route::post('/coveragestore', 'CoverageController@store')->name('coveragestore');

Route::resource('/products', 'ProductController');
Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('p.destroy');

Route::resource('/requirement', 'RequirementController');
Route::get('/requierment/destroy/{id}', 'RequirementController@destroy')->name('r.destroy');

Route::post('send','mailController@send')->name('send');

