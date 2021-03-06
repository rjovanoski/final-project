<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Page\PageController@index')->name('home');
Route::get('about', 'Page\PageController@about')->name('about');

Route::get('contact', 'Contact\ContactUsController@create')->name('contact');
Route::post('contact', 'Contact\ContactUsController@store');

Route::get('recipes', 'Page\PageController@recipes')->name('recipes');

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

Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function(){
    Route::delete('/{user}/avatar/delete', 'UserController@avatarDestroy')->name('avatar.delete');
    Route::patch('/{user}/password-update', 'UserController@passwordUpdate')->name('passwordUpdate');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/{user}/edit', 'AdminController@edit')->name('edit');
    Route::patch('/update', 'AdminController@update')->name('update');
    Route::delete('/{user}/destroy', 'AdminController@destroy')->name('destroy');
    Route::patch('/{user}/password-update', 'AdminController@passwordUpdate')->name('passwordUpdate');
    Route::get('recipe/{recipe}/edit', 'RecipeManagementController@edit')->name('recipe.edit');
    Route::patch('recipe/{recipe}', 'RecipeManagementController@update')->name('recipe.update');
    Route::get('user/recipes', 'RecipeManagementController@userRecipes')->name('userRecipes');
    Route::delete('recipe/{recipe}', 'RecipeManagementController@destroy')->name('recipe.destroy');
});

Route::resource('/recipe', 'Recipe\RecipeController');