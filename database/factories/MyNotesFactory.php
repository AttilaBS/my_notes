<?php

namespace Database\Factories;

use App\Models\MyNotes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\Jetstream\Features;

class MyNotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyNotes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->firstOr(
                fn () => User::factory()->create()
            ),
            'created_by' => $this->faker->numerify('###'),
            'is_public_note' => $this->faker->numberBetween(1, 0),
            'title' => $this->faker->word(),
            'content' => $this->faker->sentence($this->faker->numberBetween(4, 10)),
        ];
    }
}
