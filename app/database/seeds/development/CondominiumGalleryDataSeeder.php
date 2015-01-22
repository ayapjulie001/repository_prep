<?php
/**
 * Created by PhpStorm.
 * User: JulieAnnAyap
 * Date: 1/16/15
 * Time: 12:49 AM
 */

use Faker\Factory as Faker;

class CondominiumGalleryDataSeeder {

    protected $faker;

    function __construct()
    {
        $this->faker = Faker::create();
    }

    public function create($condo)
    {
        $max_no = $this->faker->numberBetween(4,10);

        foreach(range(1, $max_no) as $index) {
            $name = str_random(10) . '.jpg';
            Gallery::create([
                'condominium_id' => $condo->id,
                'label' => $this->faker->text(),
                'url' => URL::to('images/gallery'),
                'filename' => $name,
                'is_deleted' => $this->faker->boolean(5)
            ]);

            echo "Condo Gallery for $condo->id: $index out of $max_no \n";
        }
    }
}