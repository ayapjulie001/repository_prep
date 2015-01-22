<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\Test;

use League\FactoryMuffin\Facade as FactoryMuffin;

class ApiRepositoryTestCase extends ApiTestCase
{

    public static function setUpBeforeClass()
    {
        FactoryMuffin::loadFactories(__DIR__ . '/factories');
    }

    public function setUp()
    {
        parent::setUp();

        $this->app['artisan']->call('migrate');

        $this->migrated = true;
    }

    public static function tearDownAfterClass()
    {
        FactoryMuffin::deleteSaved();
    }
} 