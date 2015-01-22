<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 10:15 PM
 */

use Faker\Factory as Faker;

class AvailableUnitsDataSeeder {

    function __construct()
    {
        $this->faker = Faker::create();
    }

    public function create($condo)
    {
        $furnishing = FurnishingType::where('is_deleted', '=', false)->lists('id');

        $name = str_random(10) . '.jpg';
        $unit =  AvailableUnit::create([
            'condominium_id' => $condo->id,
            'price' => $this->faker->randomFloat(),
            'floor_area' => $this->faker->randomDigit() .'sqm',
            'beds' => $this->faker->randomDigit,
            'baths' => $this->faker->randomDigit,
            'no_unit_available' => $this->faker->randomDigit,
            'url' => URL::to('images/units/'),
            'filename' => $name,
            'furnishing_type_id' => $this->faker->randomElement($furnishing)
        ]);
    }

}