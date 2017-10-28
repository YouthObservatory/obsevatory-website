<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::get('{lang}/change', function ($lang) {
        return Redirect::back();
    });

    Route::auth();

    Route::get('/', 'HomeController@welcome');

    Route::post('/contact', 'ContactController@index');

    Route::get('/home', 'HomeController@index');
    Route::get('/about', 'HomeController@about');
    Route::get('/joinus', 'HomeController@joinus');
    Route::get('/terms', 'HomeController@terms');

    Route::get('/profile/{slug}', 'UsuarioController@show');
    Route::get('/profile/{slug}/edit', 'UsuarioController@edit');
    Route::post('/profile/{slug}/edit', 'UsuarioController@save');
    Route::get('/profile/{slug}/delete', 'UsuarioController@delete');

    Route::post('/newsletter/subscribe', 'NewsletterController@subscribe');

    Route::get('/activity/events', 'EventosController@show');
    Route::get('/activity/events/past', 'EventosController@showPast');
    Route::get('/activity/events/new', 'EventosController@create');
    Route::post('/activity/events/new', 'EventosController@post');
    Route::get('/activity/events/{id}/edit', 'EventosController@edit');
    Route::post('/activity/events/{id}/edit', 'EventosController@post_edit');
    Route::get('/activity/events/{id}/delete', 'EventosController@delete');
    Route::get('/activity/events/{id}', 'EventosController@details');

    Route::get('/activity/news', 'PublicacaoController@index');
    Route::get('/activity/news/new', 'PublicacaoController@post');
    Route::post('/activity/news/new', 'PublicacaoController@create');
    Route::get('/activity/news/{slug}/delete', 'PublicacaoController@delete');
    Route::get('/activity/news/{slug}/edit', 'PublicacaoController@edit');
    Route::post('/activity/news/{slug}/edit', 'PublicacaoController@save');
    Route::get('/activity/news/{slug}', 'PublicacaoController@show');

    // REST API

    Route::post('/api/comments/', 'ComentarioController@create');
    Route::get('/api/comments/{id}', 'ComentarioController@getComentarios');
    Route::put('/api/comments/{id}', 'ComentarioController@update');
    Route::delete('/api/comments/{id}', 'ComentarioController@delete');
    Route::post('/api/comments/{id}/upvotes', 'ComentarioController@upvoteUp');
    Route::delete('/api/comments/{id}/upvotes', 'ComentarioController@upvoteDown');

    Route::get('/api/events/markers', 'EventosController@markers');
    Route::get('/api/events/markers/past', 'EventosController@markersPast');

    Route::put('/api/avatar', 'UsuarioController@avatarUpdate');

    // RESOURCE API

    Route::get('/images/avatar/{slug}/{size?}', 'UsuarioController@getAvatar');
    Route::get('/images/news/{slug}/{size?}', 'PublicacaoController@getCover');

    Route::get('/image', 'ImageController@show');
    Route::post('/image', 'ImageController@upload');
    Route::put('/image', 'ImageController@update');
    Route::delete('/image', 'ImageController@delete');

    Route::put('/api/admin/publication/{id}', 'AdmController@publicacaoToggle');
    Route::put('/api/admin/role/{id}', 'AdmController@userAlterRole');
});
