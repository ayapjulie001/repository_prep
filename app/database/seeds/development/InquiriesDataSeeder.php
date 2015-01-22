<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 3:42 AM
 */

use Faker\Factory as Faker;

class InquiriesDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        Inquiry::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $holders = EstateDeveloper::lists('id');
        $max = 100;

        foreach(range(1, $max) as $index){
            Inquiry::create([
                'estate_developer_id' => $this->faker->randomElement($holders),
                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'email' => $this->faker->email(),
                'contact_number' => $this->faker->phoneNumber(),
                'message' => $this->faker->paragraph(),
                'is_deleted' => $this->faker->boolean(5)
            ]);
            echo "Inquiry: $index out of $max\n";
        }
    }
}