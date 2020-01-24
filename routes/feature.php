<?php

/*
|--------------------------------------------------------------------------
| Feature Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/features/list', 'FeatureController@List');

Route::prefix('features')->group(function () {
    Route::get('get/{id}', 'FeatureController@getFeature');

    //Redirect route
    Route::redirect('/all', 'features/list');
});