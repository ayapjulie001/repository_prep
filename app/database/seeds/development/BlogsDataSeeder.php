<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:27 AM
 */

use Faker\Factory as Faker;

class BlogsDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        Blog::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $number_of_rows = 50;
        foreach (range(1, $number_of_rows) as $index) {

            Blog::create([
                'title' => $this->faker->text(),
                'description' => implode(' ',$this->faker->sentences()),
                'link' => $this->faker->url(),
                'is_deleted' => $this->faker->boolean(10),
            ]);

            echo "Blog: $index out of $number_of_rows \n";
        }
    }
}