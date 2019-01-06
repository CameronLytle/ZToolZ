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



Route::get('/', [
    'uses' => 'ToolController@getIndex',
    'as'   => 'ztoolz.index'
]);

Route::get('tool/{id}', [
    'uses' => 'ToolController@getTool',
    'as' => 'ztoolz.tool'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'ToolController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('create', [
        'uses' => 'ToolController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create', [
        'uses' => 'ToolController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'ToolController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::post('edit', [
        'uses' => 'ToolController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'ToolController@getAdminDelete',
        'as' => 'admin.delete'
    ]);
});


Auth::routes();

Route::post('login', [
    'uses' => 'SigninController@signin',
    'as' => 'auth.signin'
]);

