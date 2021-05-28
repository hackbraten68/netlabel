<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Release;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReleaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Release::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'artist' =>Artist::factory()->create(),
            'description' =>$this->faker->paragraph(),
            'date_of_release'=>$this->faker->date(),
            'tracklist' =>$this->faker->text(),
        ];
    }
}
