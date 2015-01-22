<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

Route::get(
    '/',
    'HomeController@showWelcome'
);

Route::get(
    'sample',
    'SampleController@showWelcome'
);

Route::get(
    'sample/layout',
    'SampleController@showSampleUseOfMainLayout'
);

Route::get(
    'sample/pdf',
    'SampleController@getSamplePdf'
);

Route::resource('samples', 'SampleController');