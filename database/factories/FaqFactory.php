<?php

namespace Creode\LaravelNovaFaqs\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \Creode\LaravelNovaFaqs\Entites\Faq
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = \Creode\LaravelNovaFaqs\Entities\Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph(),
            'published_at' => $this->faker->randomElement([
                null,
                $this->faker->dateTimeBetween('-1 year', 'now')
            ]),
        ];
    }
}
