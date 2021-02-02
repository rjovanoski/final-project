<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Page\PageController@index')->name('home');
Route::get('/about', 'Page\PageController@about')->name('about');
Route::get('/contact', 'Page\PageController@contact')->name('contact');
Route::get('/recipes', 'Page\PageController@recipes')->name('recipes');

Route::group(['prefix' => 'recipes', 'namespace' => 'Page', 'as' => 'recipes.'], function(){
    Route::get('breakfast', 'PageController@breakfast')->name('breakfast');
    Route::get('bread', 'PageController@bread')->name('bread');
    Route::get('meat', 'PageController@meat')->name('meat');
    Route::get('soup', 'PageController@soup')->name('soup');
    Route::get('burger', 'PageController@burger')->name('burger');
    Route::get('pasta', 'PageController@pasta')->name('pasta');
    Route::get('pizza', 'PageController@pizza')->name('pizza');
    Route::get('cake', 'PageController@cake')->name('cake');
    Route::get('vegan', 'PageController@vegan')->name('vegan');
    Route::get('{recipe}', 'PageController@recipeView')->name('view');
});

Auth::routes();

Route::resource('/user', 'User\UserController')->except('create', 'show', 'store');

Route::resource('/recipe', 'Recipe\RecipeController');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('recipe/{recipe}/edit', 'AdminController@edit')->name('edit');
    Route::patch('recipe/{recipe}', 'AdminController@update')->name('update');
    Route::get('user/recipes', 'AdminController@userRecipes')->name('userRecipes');
    Route::delete('recipe/{recipe}', 'AdminController@destroy')->name('destroy');
});