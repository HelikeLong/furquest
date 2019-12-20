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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar',
    'update' => 'atualizar',
    'store' => 'salvar',
    'show' => 'visualizar',
]);


//Rotas de autenticação, recuperação de senhas e logout Administrativo
Route::group(['namespace' => 'Auth', 'prefix' => 'admin', 'middleware' => [], 'as' => 'noacl.route.'], function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminLoginController@login')->name('login.submit');

    Route::get('/logout', 'AdminLoginController@logout')->name('login.logout');

    Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('password.email'); //action
    Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('password.request'); //view
    Route::post('/password/reset', 'AdminResetPasswordController@reset')->name('password.reset'); //reset da senha nova
    Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('password.show.reset'); //view do token
});

//Rotas de Cadastro, autenticação, recuperação de senhas e logout Usuários
Route::group(['namespace' => 'Auth', 'middleware' => [], 'as' => 'site.'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.submit');

    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email'); //action
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request'); //view
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.reset'); //reset da senha nova
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.show.reset'); //view do token

    Route::post('/register', 'RegisterController@register')->name('register.request'); //Cadastro de usuário
});

//Rotas para o painel administrativo
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => [], 'as' => 'admin.'], function () {
    //Dasboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::group(['middleware' => []], function () {
        //Guilds
        Route::prefix('/guilds')->group(function () {
            Route::get('/', 'GuildsController@index')->name('guilds.index');

            Route::get('/trash', 'GuildsController@trashed')->name('guilds.trashed');
            Route::delete('/delete/{id}', 'GuildsController@destroy')->name('guilds.destroy');
            Route::get('/{guild}/restaura', 'GuildsController@restore')->name('guilds.restore');
            Route::delete('/{guild}/forceDelete', 'GuildsController@forceDelete')->name('guilds.forceDelete');

            Route::match(['post', 'get'], '/{id}/editar', 'GuildsController@edit')->name('guilds.edit');
            Route::match(['post', 'get'], '/cadastro', 'GuildsController@create')->name('guilds.create');
        });

        //Users
        Route::prefix('/users')->group(function () {
            Route::get('/', 'UsersController@index')->name('users.index');

            Route::get('/trash', 'UsersController@trashed')->name('users.trashed');
            Route::delete('/delete/{id}', 'UsersController@destroy')->name('users.destroy');
            Route::get('/{user}/restaura', 'UsersController@restore')->name('users.restore');
            Route::delete('/{user}/forceDelete', 'UsersController@forceDelete')->name('users.forceDelete');

            Route::match(['post', 'get'], '/{id}/editar', 'UsersController@edit')->name('users.edit');
            Route::match(['post', 'get'], '/cadastro', 'UsersController@create')->name('users.create');

            Route::get('/profile/{id}', 'UsersController@profile')->name('users.profile');
        });
    });
});


//Rotas para o site
Route::group(['namespace' => 'Front', 'middleware' => [], 'as' => 'site.'], function () {

    // Base do site
    Route::get('/', 'SiteController@index')->name('index');
    Route::group(['namespace' => 'Front', 'middleware' => [], 'as' => 'about.', 'prefix' => '/sobre'], function () {
        Route::get('/o-que-e-furquest', function () { return view('web.about.furquest'); })->name('furquest');
        Route::get('/o-que-e-arg', function () { return view('web.about.arg'); })->name('arg');
        Route::get('/o-que-e-furry', function () { return view('web.about.furry'); })->name('furry');
    });
    Route::get('/contato', function () { return view('web.contact'); })->name('contact');

});
