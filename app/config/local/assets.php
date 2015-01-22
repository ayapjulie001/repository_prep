<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

$build_base = URL::to('/') . '/build' . '/';
$build_js = $build_base . 'js/';
$build_css = $build_base . 'css/';

return [

    'libraries' => [
        $build_js . 'Libraries/libraries.js'
    ],

    'common' => [

        $build_js . 'Common/common.js'

    ],

    'scripts' => [

        /**
         * put specific assets for every single page
         *
         * example:
         *
         * for login page
         *
         * 'login' => [
         *      'dummy.min.js'
         * ]
         */

        'sample' => [
            $build_js . 'Sample/sample.js'
        ]
    ],

    'styles' => [

        /**grunt
         * put specific assets for every single page
         *
         * example:
         *
         * for login page
         *
         * 'login' => [
         *      'dummy.min.css'
         * ]
         */

        'libraries' => [
            $build_css . 'Bootstrap/css/bootstrap.css',
            $build_css . 'UI-Grid/ui-grid.css'
        ],
        'sample' => [
            $build_css . 'Sample/sample.css'
        ]
    ],
];