<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'v1'
], function () {
    Route::get('/tasks', 'TaskManagementController@index');
});
