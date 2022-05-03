<?php

namespace Database\Factories;

use App\Models\IbuHamil;
use Illuminate\Database\Eloquent\Factories\Factory;

class IbuHamilFactory extends Factory
{
    protected $model = IbuHamil::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_ibu' => $this->faker->name($gender = 'male'),
            'alamat' => $this->faker->address(),
            'usia' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'hamil_ke' => $this->faker->randomNumber($nbDigits = 1),
            'tanggal_daftar' => $this->faker->dateTimeBetween('2022-01-01', '2023-12-31')->format('y-m-d'),
            'tanggal_bersalin' => $this->faker->dateTimeBetween('2022-01-01', '2023-12-31')->format('y-m-d'),
        ];
    }
}
