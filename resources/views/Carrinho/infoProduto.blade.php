@extends('TemplateLoja.index2')

@section('contents')
<h1 class="h3 mb-4 text-gray-800">Informação do produto</h1>

<form action="/compra/concluir" method="post">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Nome  Produto</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Descrição do Produto</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{ session('quantidadeTotal', 0) }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-success">Adicionar ao carrinho</button>

                </div>
            </div>
        </div>
    </div>
    </form>

@endsection
