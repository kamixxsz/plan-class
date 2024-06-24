<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['titulo',
    'subtitulo',
    'autor', 
    'datadepublicacao' ,
    'edicao',
    'editora',
    'capa_livro'];

    public function relUsers(){
        return $this->hasMany('App\Models\User', foreignKey:'id', localKey:'id_user');
    }
}

