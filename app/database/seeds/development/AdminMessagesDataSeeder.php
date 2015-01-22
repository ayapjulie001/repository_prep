<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 9:38 PM
 */


use Faker\Factory as Faker;

class AdminMessagesDataSeeder extends Seeder {

    protected $faker;

    public function __construct()
    {
        AdminMessage::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $country_list = Country::lists('id');

        $number_of_rows = 50;
        foreach (range(1, $number_of_rows) as $index) {
            AdminMessage::create([
                'country_id' => $this->faker->randomElement($country_list),
                'email' => $this->faker->email(),
                'contact_number' => $this->faker->phoneNumber(),
                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'topic' => $this->faker->text(),
                'message' => $this->faker->paragraph(),
                'is_deleted' => $this->faker->boolean(10),
            ]);
            echo "Message: $index out of $number_of_rows \n";
        }
    }

} 
