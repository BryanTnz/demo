<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use App\Models\Report;

class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition()
    {
        return [

            'title' => $this->faker->title,

            'description' => $this->faker->text(255),
        ];
    }


}
