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


  Route::get('/','Heroes\HeroesController@index')->name('heroes-index');
  Route::get('/myheroes','Heroes\HeroesController@index')->name('heroes-index');




Route::group(['prefix' => '/myheroes', 'namespace' => 'Heroes'], function () {
    
      Route::get('createhero','HeroesController@create')->name('heroes-create');
        Route::post('createhero','HeroesController@store')->name('heroes-store');
        
});

Route::group(['prefix' => '/myheroes/team', 'namespace' => 'Heroes',], function () {

    
      Route::get('/','HeroesTeamsController@create')->name('heroes-team-create');
            
 
});


