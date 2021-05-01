<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    //BBDD relations
    public function categoria(){ //$book->category->name
        return $this->belongsTo(Categoria::class); //Belongs to a category
    }

    public function etiquetas(){ //$book->
        return $this->belongsToMany(Etiqueta::class);
    }

    protected $dates = ['fecha']; // Format dates
}
