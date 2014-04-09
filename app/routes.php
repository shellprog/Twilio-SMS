<?php

Route::get('/', 'SMSController@index');
Route::post('/send', 'SMSController@send');
