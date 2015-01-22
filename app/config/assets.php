<?php
/**
 * Created by Jayson Ojeda.
 * User: root
 * Date: 9/25/14
 * Time: 6:21 PM
 */

$prod_base = 'assets' . '/';
$prod_js = $prod_base . 'js/';
$prod_css = $prod_base . 'css/';

return [

    'libraries' => $prod_js . 'Libraries/libraries.min.js',

    /**
     * set common to empty array for production
     */
    'common' => [],

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

    ],

    'styles' => [

        /**
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
    ],

];