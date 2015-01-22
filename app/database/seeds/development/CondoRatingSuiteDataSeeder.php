<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 3:04 AM
 */

use Faker\Factory as Faker;

class CondoRatingSuiteDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        CondominiumRatingTrail::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $condos = Condominium::where('is_deleted', false)->lists('id');
        $parking_types = ParkingType::lists('id');
        $composure = ComposureType::lists('id');
        $accessibility = AccessibilityType::lists('id');

        $num_of_rows = 5;
        foreach($condos as $condo) {
            foreach (range(1, $num_of_rows) as $index) {
                CondominiumRatingTrail::create([
                    'condominium_id' => $condo,
                    'amen_fac_rate' => $this->faker->randomFloat(1, 1, 10),
                    'amen_fac_desc' => $this->faker->paragraph(),
                    'transpo_rate' => $this->faker->randomFloat(1, 1, 10),
                    'transpo_desc' => $this->faker->paragraph(),
                    'pop_building_unit' => $this->faker->numberBetween(1, 100),
                    'pop_units_per_floor' => $this->faker->randomDigit(),
                    'parking_type_id' => $this->faker->randomElement($parking_types),
                    'parking_desc' => $this->faker->paragraph(),
                    'private_parking_price' => $this->faker->randomFloat(),
                    'sound_rate' => $this->faker->randomFloat(1, 1, 10),
                    'sound_desc' => $this->faker->paragraph(),
                    'security_rate' => $this->faker->randomFloat(1, 1, 10),
                    'security_desc' => $this->faker->paragraph(),
                    'security_score' => $this->faker->randomFloat(1, 80, 95),
                    'environment_composure_id' => $this->faker->randomElement($composure),
                    'noise_isolation_id' => $this->faker->randomElement($composure),
                    'accessibility_type_id' => $this->faker->randomElement($accessibility),
                    'transportation_type_id' => $this->faker->randomElement($accessibility),
                    'desc_pic_url' => URL::to('images/desc_pics') . str_random(10) . 'jpg',
                    'cover_pic_url' => URL::to('images/cover_pics') . str_random(10) . 'jpg',
                    'security_pic_url' => URL::to('images/security_pics') . str_random(10) . 'jpg',
                    'is_deleted' => $this->faker->boolean(10)
                ]);


                echo "Condominium: $condo Index: $index out of $num_of_rows \n";
            }
        }
    }
}