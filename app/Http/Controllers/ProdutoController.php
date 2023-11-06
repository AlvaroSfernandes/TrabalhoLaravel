<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Cor;

class ProdutoController extends Controller
{
    public function index() {

        //$produtos = Produto::all()->toArray();

        $produtos = Produto::select("produto.id",
                                    "produto.nome",
                                    "produto.quantidade",
                                    "produto.preco",
                                    "categoria.nome AS cat",
                                    "marca.nome AS marc"
                                    )
                    ->join("categoria", "categoria.id", "=", "produto.id_categoria")
                    ->join("marca", "marca.id", "=", "produto.id_marca")
                    ->get();

        return view("Produto.index",[
            "produtos" => $produtos
        ]);
    }

    public function inserir() {
        $categorias = Categoria::all()->toArray();
        $marcas = Marca::all()->toArray();
        return view("Produto.inserir", [
                                'categorias' => $categorias,
                                'marcas' => $marcas,
                            ]);
    }

    public function salvar_novo(Request $request) {

        $produto = new Produto();

        $produto->nome = $request->input("nome");
        $produto->id_categoria = $request->input("id_categoria");
        $produto->id_marca = $request->input("id_marca");
        $produto->preco = $request->input("preco");
        $produto->quantidade = $request->input("quantidade");

        $produto->descricao = " ";

        $produto->save();

        return redirect()->route("produto.index");
    }



    public function excluir($id){
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->route('produto.index')->with('error', 'Produto não encontrada.');
        }

        $produto->delete();

        return redirect()->route('produto.index')->with('success', 'Produto excluida com sucesso.');
    }
    public function alterar($id){
        $produto = Produto::find($id);
        $categoria = Categoria::find($produto['id_categoria']);
        $marca = Marca::find($produto['id_marca']);
        $categorias = Categoria::all()->toArray();
        $marcas = Marca::all()->toArray();


        if (!$produto) {
            return redirect()->route('produto.index')->with('error', 'Produto não encontrada.');
        }

        return view('Produto.alterar', [
            'produto'=> $produto,
            'categoria' => $categoria,
            'marca' => $marca,
            'categorias' => $categorias,
            'marcas' => $marcas,
        ]);
    }

    public function alterarProduto(Request $request, $id){
        $produto = Produto::find($id);


        $produto->nome = $request->input("nome");
        $produto->id_categoria = $request->input("id_categoria");
        $produto->id_marca = $request->input("id_marca");
        $produto->preco = $request->input("preco");
        $produto->quantidade = $request->input("quantidade");
        $produto->save();

        return redirect()->route('produto.index')->with('success', 'Produto editada com sucesso.');
    }
}
