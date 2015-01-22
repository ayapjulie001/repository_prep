<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:19 AM
 */

use Faker\Factory as Faker;

class ArticlesDataSeeder extends Seeder{

    protected $faker;
    
    public function __construct()
    {
        Article::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $number_of_rows = 50;
        foreach (range(1, $number_of_rows) as $index) {

            $article = Article::create([
                'title' => $this->faker->text(),//implode(' ', $this->faker->words()),
                'author' => $this->faker->name(),
                'description' =>  implode(' ',$this->faker->sentences()),
                'content' =>  implode(' ',$this->faker->paragraphs()),
                'reference' => $this->faker->sentence(),
                'is_deleted' => $this->faker->boolean(10),
            ]);

            $article->slug = $article->id . '-' . Str::slug($article->title);
            $article->save();

            echo "Article: $index out of $number_of_rows \n";
        }
    }
}