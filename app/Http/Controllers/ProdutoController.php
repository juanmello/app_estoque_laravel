<?php

namespace App\Http\Controllers;

use App\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
}

/*public function pesquisar()
{
	$produtos = Produto::all();
        foreach ($produtos as $produto){
            echo $produto->descricao . "<br>";
        }
}*/

public function pesquisar()
{
	// Busca todos os produtos do banco de dados
	$produtos = Produto::all();
	
	// Chama a view produto.pesquisar
        return view('produto.pesquisar');
}