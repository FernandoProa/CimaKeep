<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Note extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $appends = ['ShortestContent'];

    public function getShortestContentAttribute()
    {
        $content = $this->content;
        $title = $this->title;
        $titleMaxLength = 10;
        $contentMaxLength = 300;

        // Verify the content and title length
        $content = strip_tags($this->content); // Eliminar etiquetas HTML
        $content = str_replace('&nbsp;', ' ', $content); // Reemplazar espacios no separables (&nbsp;) por espacios normales
        $content = trim($content); // Eliminar espacios en blanco y saltos de línea al comienzo y final del contenido
        $content = preg_replace('/\s+/', ' ', $content); // Eliminar espacios en blanco y saltos de línea adicionales

        $content = substr($content, 0, 300); // Obtener los primeros 100 caracteres del contenido


        if (strlen($title) > $titleMaxLength) {
            $title = substr($title, 0, $titleMaxLength) . '...';
        }

        return [
            'content' => $content,
            'title' => $title,
        ];
    }
}
