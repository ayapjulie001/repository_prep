<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 3:47 AM
 */

use Faker\Factory as Faker;

class DeveloperMessageDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        DeveloperMessage::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $holders = EstateDeveloper::lists('id');
        $max = 100;

        foreach(range(1, $max) as $index){
            DeveloperMessage::create([
                'estate_developer_id' => $this->faker->randomElement($holders),
                'subject' => $this->faker->sentence(),
                'message' => $this->faker->paragraph(),
                'is_deleted' => $this->faker->boolean(5)
            ]);
            echo "Estate Holder Message: $index out of $max \n";
        }
    }
}