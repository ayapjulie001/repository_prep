<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:11 AM
 */

use Faker\Factory as Faker;

class ComposureTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        ComposureType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Highly Composed', 'Partially Composed', 'Moderately Composed', 'Poorly Composed'];

        foreach($arr as $type){
            ComposureType::create([
                'composure' => $type
            ]);
        }
    }
}