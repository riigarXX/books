<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Libro;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate(); //Avoid duplicating data

        $categoria = new Categoria();
        $categoria->nombre = "Terror";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Mystery";
        $categoria->save();

        Etiqueta::truncate(); //Avoid duplicating data

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Cosmic terror";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Supernatural mystery";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "police mysteries";
        $etiqueta->save();

        Libro::truncate(); //Avoid duplicating data

        $libro = new Libro();
        $libro->titulo = "The Call of Cthulhu";
        $libro->descripcion = "A good book about mystery and cosmic terror";
        $libro->contenido = "<p>A man discovers his late uncle's notes and becomes embroiled in a conspiracy involving an ancient ocean god and his violent followers.</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1,2]); //Match the book to two labels
        
        $libro = new Libro();
        $libro->titulo = "The Murders in the Rue Morgue";
        $libro->descripcion = "Good book on detectives and unsolved crimes";
        $libro->contenido = "<p>After a strange murder occurred in which a mother and her daughter lost their lives, the police in charge of the investigation were unable to reach any relevant conclusion that shed light on what happened. For this reason, the task is entrusted to M. Dupin, an amateur detective who after intensive investigations finds an explanation that will surprise more than one.</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 2;
        $libro->save();

        $libro->etiquetas()->attach([3]);


    }
}
