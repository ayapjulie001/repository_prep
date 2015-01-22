<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:32 AM
 */

use Faker\Factory as Faker;

class PropertyTypeDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        PropertyType::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Condominium'];

        foreach($arr as $type){
            PropertyType::create([
                'type' => $type
            ]);
        }
    }
}