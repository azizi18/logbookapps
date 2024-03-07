<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Logbook;

class LogBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = LogBook::class;


    public function definition()
    {
     
        return [
            'nama_pasien' => $this->faker->name(),
            'umur'        => $this->faker->numberBetween(18, 80),
            'mr'          => $this->faker->randomNumber(),
            'diagnosis_masuk' => $this->faker->sentence(),
            'diagnosis_keluar' => $this->faker->sentence(),
            'tindakan' => $this->faker->sentence(),
            'dpjp' => $this->faker->sentence(),
            'klasifikasi_kasus' => $this->faker->sentence(),
            'kasus_obstetri' => $this->faker->randomElement(['diagnosis_obstetri', 'tindakan_obstetri']),
            'kasus_ginekologi' => $this->faker->randomElement(['diagnosis_ginekologi', 'tindakan_ginekologi']),
            'level_kompetensi' => $this->faker->sentence(),
            'asal_rujukan' => $this->faker->sentence(),
            'keterangan' => $this->faker->text(),
            'status' => $this->faker->randomElement(['diterima', 'tertunda']),
            'tanggal_masuk' => $this->faker->dateTimeThisMonth(),
            'tanggal_tindakan' => $this->faker->dateTimeThisMonth(),
        ];
    }


}
