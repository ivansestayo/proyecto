<?php

namespace Database\Factories;

use App\Models\Prestamo;
use App\Models\Socio;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
    protected $model = Prestamo::class;
    public function definition()
    {
        return [
            'id_socio'                   => Socio::all()->random()->id,
            'id_libro'                   => Libro::all()->unique()->random()->id,
            'fecha_prestamo'             => $this->faker->date($format = 'd-m-Y'),
            'fecha_devolucion'           => $this->faker->date($format = 'd-m-Y'), 
        ];
    }
}
