<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 12:26 AM
 */

use Faker\Factory as Faker;

class CondominiumStatusDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        CondominiumStatus::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $arr = ['Ready for Occupancy', 'Pre-Selling', 'Off-Plan'];

        foreach($arr as $status){
            CondominiumStatus::create([
               'status' => $status
            ]);
        }

    }
}