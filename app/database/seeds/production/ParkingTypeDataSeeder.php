<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:34 AM
 */

use Faker\Factory as Faker;

class ParkingTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        ParkingType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Basement', 'Podium'];

        foreach($arr as $type){
            ParkingType::create([
               'parking' => $type
            ]);
        }
    }
}