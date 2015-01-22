<?php
/**
 * Created JulieAnnAyap
 * Date: 1/16/2015
 * Time: 4:30 AM
 */

use Faker\Factory as Faker;

class ReviewsDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        Review::truncate();
        $reviews = Review::all();
        foreach($reviews as $review){
            $review->ratings()->detach();
        }
        $this->faker = Faker::create();
    }

    public function run()
    {
        $condos = Condominium::where('is_deleted', false)->lists('id');

        $num_or_rows = 50;
        $limit = 10;

        for($i = 0 ; $i < $num_or_rows; $i++){
            $temp = $condos;
            $arr_condo = [];

            $review = Review::create([
                'title' => $this->faker->text(),
                'description' => $this->faker->paragraph()
            ]);

            $review->slug = $review->id . '-' . $review->title;
            $review->save();

            for($j = 0 ; $j < $limit; $j++){
                $chosen = $this->faker->randomElement($temp);
                $arr_condo[] = $chosen;

                $ratings = CondominiumRatingTrail::where('condominium_id', $chosen)->lists('id');
                $rate = $this->faker->randomElement($ratings);
                $review->ratings()->attach($rate);

                $temp = array_diff($temp, $arr_condo);

                echo "Review:  $review->id, Rating: $rate\n";
            }
        }
    }
}