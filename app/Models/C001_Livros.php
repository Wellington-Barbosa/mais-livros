<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C001_Livros extends Model
{
    use HasFactory;

    public function usesTimestamps()
    {
        return false;
    }

    protected $table = 'C001_Livro'; //Especificando a tabela do Banco de dados.

    protected $fillable = [
        'C001_Codigo',
        'C001_Titulo',
        'C001_Categoria',
        'C001_Prefacio',
        'C001_Status',
        'C001_Classificacao',
        'C001_Favorito',
        'C001_DataInclusao',
        'C001_UsuarioInclusao',
        'C001_DataAlteracao',
        'C001_UsuarioAlteracao'
    ];
}
