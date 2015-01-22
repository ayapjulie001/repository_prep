<?php

return array(

	'default' => 'sqlite',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => ':memory:',
			'prefix'   => '',
		),
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'testing',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        )
	),

);
