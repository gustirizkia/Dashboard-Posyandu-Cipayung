<?php

namespace Database\Factories;

use App\Models\Balita;
use App\Models\Kematian;
use Illuminate\Database\Eloquent\Factories\Factory;

class KematianFactory extends Factory
{
    protected $model = Kematian::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_anak' => Balita::factory(),
            'usia' =>  $this->faker->randomNumber($nbMaxDecimals = NULL, $min = 1, $max = 10),
            'tgl_kematian' => $this->faker->dateTimeBetween('2018-01-01', '2022-12-31')->format('y-m-d'),
            'ket' => 'lorem'
        ];
    }
}
