<?php

namespace Database\Factories;

use App\Models\Balita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalitaFactory extends Factory
{
    protected $model = Balita::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_anak' => $this->faker->name($gender = null),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Prempuan']),
            'nama_ibu' => $this->faker->name($gender = 'male'|'female'),
            'nama_ayah' => $this->faker->name($gender = 'male'|'female'),
            'tanggal_lahir' => $this->faker->dateTimeBetween('2002-01-01', '2012-12-31')->format('y-m-d'),
            'tinggi_badan' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20),
            'berat_badan' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20),
            'lingkar_kepala' => $this->faker->randomNumber($nbDigits = 3, $strict = false),
            'alamat' => $this->faker->address()

        ];
    }
}
