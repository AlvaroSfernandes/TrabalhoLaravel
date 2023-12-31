@extends('TemplateAdmin.index')

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Cadastro de Produto</h1>
    <div class="card">
        <div class="card-body">
            <form action="/produto/inserir" method="post" style="display: flex; flex-direction: column">
                @csrf
                <label>Nome do Produto</label>
                <input type="text" name="nome" style="margin-bottom: 10px" placeholder="Nome">


                <label>Categoria</label>
                <select name="id_categoria" style="margin-bottom: 10px">
                    @foreach ($categorias as $dado)
                        <option value="{{ $dado["id"] }}">{{ $dado["nome"] }}</option>
                    @endforeach
                </select>


                <label>Marca</label>
                <select name="id_marca" style="margin-bottom: 10px">
                    @foreach ($marcas as $dado)
                        <option value="{{ $dado["id"] }}">{{ $dado["nome"] }}</option>
                    @endforeach
                </select>

                <label>Cor</label>
                <select name="id_cor" style="margin-bottom: 10px">
                    @foreach ($cores as $dado)
                        <option value="{{ $dado["id"] }}">{{ $dado["cor"] }}</option>
                    @endforeach
                </select>

                <label>Preço</label>
                <input type="text" name="preco" style="margin-bottom: 10px" placeholder="">

                <label>Quantidade</label>
                <input type="text" name="quantidade" style="margin-bottom: 10px" placeholder="">


                <label>URL da Imagem</label>
                <input type="text" name="url_imagem" style="margin-bottom: 10px" placeholder="">


                <label>Descrição</label>
                <textarea id="editDesc" name="descricao" style="margin-bottom: 10px" placeholder=""></textarea>


                <div style="width: 100%; display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-success" style="width: 10%">Inserir</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#editDesc' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
