<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            'title' => '',
            'content' => '
                1.	Impuntualidad
                2.	Inseguridad
                3.	Ser introvertido
                4.	Mi dificultad para negarme a hacer cosas que me piden
                5.	Irresponsabilidad
                6.	Desinterés
                7.	Incompetencia
                8.	Baja autoestima
                9.	Pesimismo
                10.	Mi miedo al cambio (zona de confort)
                11.	Mi preocupación a cerca de lo que los demás piensen de mi
                12.	Mi bajo control de mi vida
                13.	No vivo el presente
                14.	Mi pereza
                15.	Mi inestabilidad emocional
                16.	Dependencia emocional
                17.	Manipulación
                18.	Exigente
                19.	Impaciente
                20.	Terca',
            'has_pin' => false
        ]);
    }
}
