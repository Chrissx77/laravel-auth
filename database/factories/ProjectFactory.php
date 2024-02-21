<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */





    public function definition()
    {

        $names = [];

        for ($i = 0; $i < 3; $i++) {
            $names[] = fake()->name();
        }

        $collaboratorsString = implode(', ', $names);

        return [
            'name'=> fake()->unique()-> words(3, true) ,
            'description'=> fake()-> paragraph(),
            'image'=> fake()-> imageUrl(),
            'collaborators' => $collaboratorsString,
        ];
    }
}
