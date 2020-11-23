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
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['as' => 'participants.'], function () {
        //Users
        Route::prefix('/users')->as('users.')->group(function () {
            Route::get('/', 'UsersController@index')->name('index');

            Route::get('/trash', 'UsersController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'UsersController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'UsersController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'UsersController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'UsersController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'UsersController@create')->name('create');

            Route::get('/profile/{id}', 'UsersController@profile')->name('profile');
        });

        //Guilds
        Route::prefix('/guilds')->as('guilds.')->group(function () {
            Route::get('/', 'GuildsController@index')->name('index');

            Route::get('/trash', 'GuildsController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'GuildsController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'GuildsController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'GuildsController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'GuildsController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'GuildsController@create')->name('create');

            Route::get('/profile/{id}', 'GuildsController@profile')->name('profile');
        });

        //Tickets
        Route::prefix('/tickets')->as('tickets.')->group(function () {
            Route::get('/', 'TicketsController@index')->name('index');

            Route::get('/trash', 'TicketsController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'TicketsController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'TicketsController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'TicketsController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'TicketsController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'TicketsController@create')->name('create');
        });
    });

    Route::group(['as' => 'quests.'], function () {
        //Quest
        Route::prefix('/quests')->as('quests.')->group(function () {
            Route::get('/', 'QuestsController@index')->name('index');

            Route::get('/trash', 'QuestsController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'QuestsController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'QuestsController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'QuestsController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'QuestsController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'QuestsController@create')->name('create');
        });

        //Step
        Route::prefix('/quest-steps')->as('questSteps.')->group(function () {
            Route::get('/', 'QuestStepsController@index')->name('index');

            Route::get('/trash', 'QuestStepsController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'QuestStepsController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'QuestStepsController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'QuestStepsController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'QuestStepsController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'QuestStepsController@create')->name('create');
        });

        //Tip
        Route::prefix('/quest-step-tips')->as('questStepTips.')->group(function () {
            Route::get('/', 'QuestStepTipsController@index')->name('index');

            Route::get('/trash', 'QuestStepTipsController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'QuestStepTipsController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'QuestStepTipsController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'QuestStepTipsController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'QuestStepTipsController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'QuestStepTipsController@create')->name('create');
        });

        //Routes
        Route::prefix('/quest-routes')->as('questRoutes.')->group(function () {
            Route::get('/', 'QuestRoutesController@index')->name('index');

            Route::get('/trash', 'QuestRoutesController@trashed')->name('trashed');
            Route::delete('/delete/{id}', 'QuestRoutesController@destroy')->name('destroy');
            Route::get('/{id}/restore', 'QuestRoutesController@restore')->name('restore');
            Route::delete('/{id}/forceDelete', 'QuestRoutesController@forceDelete')->name('forceDelete');

            Route::match(['post', 'get'], '/{id}/edit', 'QuestRoutesController@edit')->name('edit');
            Route::match(['post', 'get'], '/create', 'QuestRoutesController@create')->name('create');
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
