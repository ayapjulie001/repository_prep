<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        $data = [
            'scripts' => array_merge(
                Config::get('assets.libraries'),
                Config::get('assets.common')
            ),
            'styles' => Config::get('assets.styles')
        ];

        return View::make('hello')->with($data);
    }

    public function about()
    {
        return 'ABOUT';
    }

}
