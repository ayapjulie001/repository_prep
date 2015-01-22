<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 4:29 AM
 */

use Faker\Factory as Faker;

class SalesReportsDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        SalesReport::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $units = AvailableUnit::where('is_deleted', false)->lists('id');
        $num_of_rows = 100;

        foreach(range(1, $num_of_rows) as $index){
            SalesReport::create([
                'referral_no' => str_random(10),
                'referral_name' => $this->faker->name(),
                'referral_email' => $this->faker->email(),
                'unit_price' => $this->faker->randomFloat(),
                'commission' => $this->faker->randomFloat(),
                'quantity' => $this->faker->numberBetween(1,5),
                'unit_id' => $this->faker->randomElement($units),
                'is_deleted' => $this->faker->boolean(5)
            ]);
        }
    }
}