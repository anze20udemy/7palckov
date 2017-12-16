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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home');

});
Route::get('/cenik', function () {
    return view('cenik');
});
Route::get('/delavnik', function () {
    return view('delavnik');
});
Route::get('/kajpocnemo', function () {
    return view('kajpocnemo');
});
Route::get('/predstavitev', function () {
    return view('predstavitev');
});
Route::get('/prehrana', function () {
    return view('prehrana');
});
Route::get('/kontakt', 'ContactusController@getContact');
Route::post('/kontakt', 'ContactusController@postContact');

Route::get('/poslano', 'ContactusController@sent');

Route::get('/slike', 'AdminMediaController@photos');

Route::resource('thumbnail', 'ThumbnailController');

Route::get('/logout', 'Auth\LoginController@logout');


Route::auth();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', function (){

    $user = Auth::user();

    if($user) {

    return view('admin.index');

    } else {

        return redirect('/');
    }

} );


Route::group(['middleware'=>'admin'], function (){





    Route::resource('admin/users','AdminUsersController', ['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'
    ]] );



    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[

        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit'
    ]] );



    Route::resource('admin/media', 'AdminMediaController', ['names'=>[

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit'
    ]] );

    Route::resource('admin/contactus','ContactusController', ['names'=>[

        'index'=>'admin.contactus.index',
        'create'=>'admin.contactus.create',
        'store'=>'admin.contactus.store',
        'edit'=>'admin.contactus.edit'
    ]] );



});
