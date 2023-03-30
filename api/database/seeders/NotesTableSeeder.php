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
            'title' => 'Title Test for the first note',
            'content' => '
                <ol>
                  <li>Impuntualidad</li>
                  <li>Inseguridad</li>
                  <li>Ser introvertido</li>
                  <li>Mi dificultad para negarme a hacer cosas que me piden</li>
                  <li>Irresponsabilidad</li>
                  <li>Desinterés</li>
                  <li>Incompetencia</li>
                  <li>Baja autoestima</li>
                  <li>Pesimismo</li>
                  <li>Mi miedo al cambio (zona de confort)</li>
                  <li>Mi preocupación acerca de lo que los demás piensen de mi</li>
                  <li>Mi bajo control de mi vida</li>
                  <li>No vivo el presente</li>
                  <li>Mi pereza</li>
                  <li>Mi inestabilidad emocional</li>
                  <li>Dependencia emocional</li>
                  <li>Manipulación</li>
                  <li>Exigente</li>
                  <li>Impaciente</li>
                  <li>Terca</li>
                </ol>',
            'has_pin' => false
        ]);
    }
}
