<?php

namespace App\Http\Services;

use App\Models\C001_Livros;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FabricaLivro
{
    public function criaLivro($codigoLivro, $titulo, $categoria, $prefacio, $classificacao, $favorito):C001_Livros
    {
        //data e Hora de criação do registro
        $date = Carbon::now();
        $dateInclusao = $date;

        //data e hora hoje formatada - Mudar
        //$data = Carbon::now()->format('d/m/Y');
        //$dataHoje = $data;

        //recupera dados do usuário logado no sistema
        $usuario = User::query()
            ->where("id", "=", Auth::user()->getAuthIdentifier())
            ->select("name")
            ->first()
            ->name;

        $usuarioInclusao = $usuario;

        DB::beginTransaction();

        $livro = C001_Livros::create([
            'C001_Codigo' => $codigoLivro,
            'C001_Titulo' => $titulo,
            'C001_Categoria' => $categoria,
            'C001_Prefacio' => $prefacio,
            'C001_Classificacao' => $classificacao,
            'C001_Favorito' => $favorito,
            'C001_DataInclusao' => $dateInclusao,
            'C001_UsuarioInclusao' => $usuarioInclusao
        ]);

        DB::commit();

        return $livro;
    }
}
