<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:36 AM
 */

use Faker\Factory as Faker;

class LocationTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        LocationType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Schools', 'Malls', 'Police Stations', 'Hospitals', 'Restaurants', 'Churches', 'Bars', 'Banks', 'Parks', 'Drug Stores', 'Gas Stations'];

        foreach($arr as $type){
            LocationType::create([
                'location' => $type
            ]);
        }
    }
}