<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:30 AM
 */

use Faker\Factory as Faker;

class FurnishingTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        FurnishingType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Unfurnished', 'Semi-furnished', 'Fully-furnished'];

        foreach($arr as $type){
            FurnishingType::create([
                'furnishing' => $type
            ]);
        }
    }
}