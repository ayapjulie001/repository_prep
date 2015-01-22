<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:20 AM
 */

use Faker\Factory as Faker;

class UnitTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        UnitType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Studio', '1 Bedroom', '2 Bedroom', '3 Bedroom'];

        foreach($arr as $types){
            UnitType::create([
                'unit' => $types,
            ]);
        }
    }

}