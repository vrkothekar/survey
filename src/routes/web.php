<?php

$namespace = 'Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'myroute'
], function(){
    Route::get('/', 'SurveyController@index');

    Route::get('test', 'SurveyController@test');
});