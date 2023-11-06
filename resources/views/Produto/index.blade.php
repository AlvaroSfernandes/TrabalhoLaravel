@extends('TemplateAdmin.index')

@section('contents')



    <h1 class="h3 mb-4 text-gray-800">Cadastro de Produtos</h1>

    <div class="card">
        <div class="card-body">
            <a href="/produto/inserir" class="btn btn-success" style="margin-bottom: 10px">Novo</a>
            <table class="table table-bordered dataTable">
                <thead>
                <td>ID</td>
                <td>Nome</td>
                <td>Marca</td>
                <td>Categoria</td>
                <td>Situação</td>
            </thead>
            <tbody>
                @foreach ($produtos as $dados)
                    <tr>
                        <td>{{ $dados["id"] }}</td>
                        <td>{{ $dados["nome"] }}</td>
                        <td>{{ $dados["marc"] }}</td>
                        <td>{{ $dados["cat"] }}</td>
                        <td>ATIVO</td>
                        <td>
                            <div style="display: flex; width: 100%">
                                <form style="margin-left: 20px"
                                      action="{{ route('produto.alterar', ['id' => $dados['id']]) }}" method="get">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-success">
                                        Alterar
                                    </button>
                                </form>
                                <form style="margin-left: 20px"
                                      action="{{ route('produto.excluir', ['id' => $dados['id']]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection
