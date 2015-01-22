<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 8:46 PM
 */


Route::resource(
    'contacts',
    'ContactController',
    [
        'only' => ['index', 'create', 'store', 'destroy' , 'show']
    ]
);
