<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 10:04 PM
 */

use Faker\Factory as Faker;

class CondominiumUnitTypesDataSeeder{

    protected $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function create($condo)
    {
        $units = UnitType::where('is_deleted', '=', false)->lists('id');

        foreach($units as $unit) {
            $condo->unit_types()->attach($unit);
        }
    }
} 