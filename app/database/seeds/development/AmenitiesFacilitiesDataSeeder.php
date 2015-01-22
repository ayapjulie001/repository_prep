<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 3:32 AM
 */

use Faker\Factory as Faker;

class AmenitiesFacilitiesDataSeeder{

    protected $faker;
    
    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function create($condo)
    {
        $num_of_rows = 15;

        foreach(range(1, $num_of_rows) as $index){
            AmenitiesAndFacilities::create([
                'name' => $this->faker->text(),
                'condominium_id' => $condo->id,
                'is_deleted' => $this->faker->boolean()
            ]);
        }
    }
}