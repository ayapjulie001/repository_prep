<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 3:33 AM
 */

use Faker\Factory as Faker;

class TransportationLocationDataSeeder{

    protected $faker;
    
    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function create($condo)
    {
        $locations = LocationType::lists('id');
        $num_of_rows = 15;

        foreach(range(1, $num_of_rows) as $index){
            TransportationAndLocation::create([
                'loc_name' => $this->faker->text(),
                'location_type_id' => $this->faker->randomElement($locations),
                'condominium_id' => $condo->id,
                'is_deleted' => $this->faker->boolean()
            ]);
        }
    }
}