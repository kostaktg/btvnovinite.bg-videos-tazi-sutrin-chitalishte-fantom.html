<?php

// English 
Route::get('en/technical-information', function ()
{
    return view('pages.en.technicalinformation');
});

Route::get('en/contacts', function ()
{
    return view('pages.en.contacts');
});

Route::get('en/Donate', function ()
{
    return view('pages.en.donate');
});



/* Pages Routes  */

Route::get('/', 'WorkshopController@index');

Route::get('/Виртуален-свят', 'WorkshopController@index')->name('index');
Route::get('/Дарения', 'WorkshopController@donate')->name('donate');

Route::get('/Кръжоци','WorkshopController@show')->name('portfolio');
Route::get('/Кръжок/{id}', 'WorkshopController@edit')->name('portfolioitem');
Route::get('/Кръжок', 'WorkshopController@create')->name('create');
Route::post('/store', 'WorkshopController@store')->name('store');
Route::get('/delete/{id}', 'WorkshopController@delete')->name('deleteworkshop');
Route::get('/editworkshop/{id}', 'WorkshopController@editupdate')->name('editworkshop');
Route::post('/updateworkshop/{id}', 'WorkshopController@update')->name('updateworkshop');
Route::post('/updateresizeworkshop/{id}', 'WorkshopController@updateresize')->name('updateresizeworkshop');


Route::get('/Дейности', 'BlogController@index')->name('blog');
Route::get('/Дейност/{id}', 'BlogController@show')->name('blogitem');
Route::get('/Дейност', 'BlogController@create')->name('createblog');
Route::post('/storeblog', 'BlogController@store')->name('storeblog');
Route::get('/deleteblog/{id}', 'BlogController@delete')->name('deleteblog');
Route::get('/editblog/{id}', 'BlogController@editupdate')->name('editblog');
Route::post('/updateblog/{id}', 'BlogController@update')->name('updateblog');


Route::get('/Клубове', 'ClubController@index')->name('club');
Route::get('/Клуб/{id}', 'ClubController@show')->name('clubitem');
Route::get('/Клуб', 'ClubController@create')->name('createclub');
Route::post('/storeclub', 'ClubController@store')->name('storeclub');
Route::get('/deleteclub/{id}', 'ClubController@delete')->name('deleteclub');
Route::get('/editclub/{id}', 'ClubController@editupdate')->name('editclub');
Route::post('/updateclub/{id}', 'ClubController@update')->name('updateclub');


Route::get('/Контакти', 'ContactController@index')->name('contact');

Route::get('/За-нас', 'AboutController@index')->name('about');

Route::get('/Английски-език', function () {
    return view('pages.pages');
})->name('pages');

Route::get('/Техническа-информация','ServiceController@index')->name('services'); 
/* END Pages Routes  */


/* COMMENT Controllers */
Route::post('/comment/{id}', 'CommentBlogController@store');
Route::post('/commentWork/{id}', 'CommentWorkshopController@store');
Route::post('/commentClub/{id}', 'CommentClubController@store');
/* END COMMENT Controllers */


/* Admin Routes  */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('admin');
Route::get('/profile', 'UserController@index')->name('profile');
Route::post('/profile', 'UserController@store')->name('profileimage');


/* END Admin Routes  */
