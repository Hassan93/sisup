<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>['web']], function(){
  //Rotas pra autenticação
  Route::get('auth/login', 'Auth\AuthController@getLogin');
  Route::post('auth/login', 'Auth\AuthController@postLogin');
  Route::get('auth/logout', 'Auth\AuthController@getLogout');

  //Rotas para registration

  Route::get('auth/register', 'Auth\AuthController@getRegister');
  Route::post('auth/register', 'Auth\AuthController@postRegister');
  //Todas rotas do cliente são get
  Route::get('blog/{slug}', array('uses'=>'BlogController@getSingle', 'as'=>'blog.single'))->where('slug', '[\w\d\-\_]+');
  Route::get('blog', array('uses' =>'BlogController@getIndex', 'as'=>'blog.index'));
  Route::get('contact','PagesController@getContact');
  Route::get('about','PagesController@getAbout');
  Route::get('/','PagesController@getIndex');
  Route::resource('posts', 'PostController');
});
