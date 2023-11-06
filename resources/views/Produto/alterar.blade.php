@extends('TemplateAdmin.index')

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Alterar Categoria</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('produto.alterar', ['id' => $produto['id']]) }}" method="POST" style="display: flex; flex-direction: column">
                @csrf
                @method('PUT')

                <label>Nome do Produto</label>
                <input type="text" name="nome" style="margin-bottom: 10px" value="{{$produto['nome']}}" placeholder="Nome">


                <label>Categoria</label>
                <select name="id_categoria" style="margin-bottom: 10px">
                    @foreach ($categorias as $dado)
                        <option value="{{ $dado["id"] }}" @if(isset($categoria) && $dado["id"] == $categoria["id"]) selected @endif>{{ $dado["nome"] }}</option>
                    @endforeach
                </select>


                <label>Marca</label>
                <select name="id_marca" style="margin-bottom: 10px">
                    @foreach ($marcas as $dado)
                    <option value="{{ $dado["id"] }}" @if(isset($marca) && $dado["id"] == $marca["id"]) selected @endif>{{ $dado["nome"] }}</option>
                    @endforeach
                </select>

                <label>Preço</label>
                <input type="text" name="preco" value="{{$produto['preco']}}" style="margin-bottom: 10px" placeholder="">

                <label>Quantidade</label>
                <input type="text" name="quantidade" value="{{$produto['quantidade']}}" style="margin-bottom: 10px" placeholder="">


                <div style="width: 100%; display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-success" style="width: 10%">Inserir</button>
                </div>
            </form>
        </div>
    </div>
@endsection
