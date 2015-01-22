<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:09 AM
 */

use Faker\Factory as Faker;

class AccessibilityTypeDatSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        AccessibilityType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Highly Accessible', 'Partially Accessible', 'Moderately Accessible', 'Poorly Accessible'];

        foreach($arr as $type){
            AccessibilityType::create([
                'accessibility' => $type
            ]);
        }
    }
}