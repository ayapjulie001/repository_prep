<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 8:09 PM
 */

use Faker\Factory as Faker;

class EstateDevelopersDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run()
    {

        $arr = [
            ['short_name' => 'SMDC', 'long_name' => 'SM Development Corporation', 'email' => $this->faker->companyEmail, 'phone' => $this->faker->phoneNumber, 'cell_no' => $this->faker->phoneNumber, 'description' => $this->faker->paragraph() ],
            ['short_name' => 'Megaworld', 'long_name' => 'Megaworld Development Corporation', 'email' => $this->faker->companyEmail, 'phone' => $this->faker->phoneNumber, 'cell_no' => $this->faker->phoneNumber, 'description' => $this->faker->paragraph() ],
            ['short_name' => 'Ayala Land', 'long_name' => 'Ayala Land Development Corporation', 'email' => $this->faker->companyEmail, 'phone' => $this->faker->phoneNumber, 'cell_no' => $this->faker->phoneNumber, 'description' => $this->faker->paragraph() ],
            ['short_name' => 'Filinvest', 'long_name' => 'Filinvest Development Corporation', 'email' => $this->faker->companyEmail, 'phone' => $this->faker->phoneNumber, 'cell_no' => $this->faker->phoneNumber, 'description' => $this->faker->paragraph() ],
            ['short_name' => 'DMCI Homes', 'long_name' => 'DMCI Project Developers, Inc.', 'email' => $this->faker->companyEmail, 'phone' => $this->faker->phoneNumber, 'cell_no' => $this->faker->phoneNumber, 'description' => $this->faker->paragraph() ]
        ];

        foreach ($arr as $estate) {
            $dev = EstateDeveloper::create($estate);

            echo "Estate Holder: $dev->short_name \n";
        }
    }
}