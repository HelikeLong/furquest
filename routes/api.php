<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Public API routes
 */
Route::group(['middleware' => [\App\Http\Middleware\AddHeaders::class]], function () {
    Route::any('/login', 'Api\AuthController@login')->name('login');
});

/**
 * Auth required API routes
 */
Route::group(['namespace' => 'Api', 'middleware' => ['auth:api', \Barryvdh\Cors\HandleCors::class], 'as' => 'api.'], function () {
    Route::match(['options', 'post'], '/logout', 'AuthController@logout')->name('logout');

    Route::group(['prefix' => '/users', 'as' => 'users.'], function () {
        Route::group(['prefix' => '/current', 'as' => 'current.'], function () {
            Route::get('/', 'UserController@current')->name('get');
            Route::put('/edit', 'UserController@edit')->name('edit');
            Route::patch('/photo', 'UserController@editPhoto')->name('editPhoto');
            Route::put('/password', 'UserController@changePassword')->name('changePassword');

            Route::group(['prefix' => '/contacts', 'as' => 'contacts.'], function () {;
                Route::post('/save', 'UserContactController@save')->name('save');
                Route::get('/{user_contact?}', 'UserContactController@get')->name('get');
                Route::delete('/{user_contact}', 'UserContactController@remove')->name('remove');
            });

            Route::group(['prefix' => '/quests', 'as' => 'quests.'], function () {;
                Route::get('/current', 'UserQuestController@current')->name('current');
                Route::get('/{user_quest?}', 'UserQuestController@get')->name('get');
            });

            Route::group(['prefix' => '/steps', 'as' => 'steps.'], function () {;
                Route::get('/{user_quest}/{user_quest_step?}', 'UserQuestStepController@get')->name('get');
                Route::post('/{user_quest}/{user_quest_step}/finish', 'UserQuestStepController@finish')->name('finish');
                Route::get('/{user_quest}/{user_quest_step}/rewards', 'UserQuestStepController@getRewards')->name('rewards');
            });

            Route::group(['prefix' => '/tips', 'as' => 'tips.'], function () {;
                Route::get('/{user_quest}/{user_quest_step}', 'UserQuestStepTipController@get')->name('get');
                Route::post('/{user_quest}/{user_quest_step}/next', 'UserQuestStepTipController@next')->name('next');
            });
        });

        Route::get('/{id}', 'UserController@get')->name('get');
    });

    Route::group(['prefix' => '/guilds', 'as' => 'guilds.'], function () {
        Route::get('/{id}', 'GuildController@get')->name('get');
    });
    Route::group(['prefix' => '/contact-types', 'as' => 'contact-types.'], function () {
        Route::get('/', 'UserContactController@getTypes')->name('getTypes');
    });
});
