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
Route::prefix('/managemember')->group(function(){
    Route::get('/view','managememberController@manmempage')->name('manmem.view');
    Route::get('/get','managememberController@getregdata')->name('manmem.getregdata');
    Route::get('/delete','managememberController@manmemdel')->name('manmem.del');
    Route::get('/updatepage','managememberController@manmemupdatepage')->name('manmem.updatepage');
    Route::post('update','managememberController@manmemupdate')->name('manmem.update');
    Route::post('/search','managememberController@manmemsearch')->name('manmem.search');
});

Route::prefix('/editnews')->group(function(){
    Route::get('/view','editnewsController@ednewspage')->name('ednews.view');
    Route::get('/insertpage','editnewsController@newsinsertpage')->name('ednews.insertpage');
    Route::post('/insert','editnewsController@newsinsert')->name('ednews.insert');
    Route::get('/delete','editnewsController@newsdel')->name('ednews.del');
    Route::get('/updatepage','editnewsController@newsupdatepage')->name('ednews.updatepage');
    Route::post('/update','editnewsController@newsupdate')->name('ednews.update');
    Route::post('/search','editnewsController@newssearch')->name('ednews.search');
});

Route::prefix('/editact')->group(function(){
    Route::get('/view','editactController@edactpage')->name('edact.view');
    Route::get('/insertpage','editactController@edactinsertpage')->name('edact.insertpage');
    Route::post('/insert','editactController@edactinsert')->name('edact.insert');
    Route::get('/delete','editactController@edactdel')->name('edact.del');
    Route::get('/updatepage','editactController@edactupdatepage')->name('edact.updatepage');
    Route::post('/update','editactController@edactupdate')->name('edact.update');
    Route::post('/search','editactController@edactsearch')->name('edact.search');
    Route::get('/edactsign','editactController@edactsign')->name('edact.sign');
});

Route::prefix('/editteam')->group(function(){
    Route::get('/view','editteamController@edteampage')->name('edteam.view');
});

Route::prefix('/editmember')->group(function(){
    Route::get('/view','editmemberController@edmempage')->name('edmem.view');
});

Route::prefix('/editconnect')->group(function(){
    Route::get('/view','editconnectController@edconpage')->name('edcon.view');
    Route::get('/updatepage','editconnectController@edconupdatepage')->name('edcon.updatepage');
    Route::post('/update','editconnectController@edconupdate')->name('edcon.update');
});

Route::prefix('/editphoto')->group(function(){
    Route::get('/view','editphotoController@edphopage')->name('edpho.view');
});
Route::prefix('/index')->group(function(){
    Route::get('/','indexController@indexpage')->name('index');
    Route::get('/sign','indexController@actsignup')->name('index.sign');
});
//Route::get('/login','loginController@loginpage')->name('login');
Route::post('/admin','adminpageController@adminpage')->name('admin');
Route::get('/isadmin','adminpageController@isadmin')->name('isadmin');
Route::get('/adminout','adminpageController@adminout')->name('adminout');
Route::prefix('/registered')->group(function(){
    Route::get('/view','registeredController@regpage')->name('regis.view');
    Route::post('/post','registeredController@regpost')->name('regis.post');
    Route::get('/get','registeredController@regget')->name('regis.check');
    Route::get('/delete','registeredController@regdel')->name('regis.del');
});
Route::post('/member','memberController@member')->name('member');
Route::get('/ismember','memberController@ismember')->name('ismember');
Route::get('/memberout','memberController@logout')->name('memlogout');