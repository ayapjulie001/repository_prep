<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\Test;

use Faker\Factory as Faker;
use Mockery;
use TestCase;

class ApiTestCase extends TestCase
{
    protected $faker;
    protected $mockery;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function tearDown()
    {
        Mockery::close();
    }
}