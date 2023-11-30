@extends('TemplateLoja.index')

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Carrinho de Compras</h1>

    {{-- Seção para os produtos no carrinho --}}
    <form action="/compra/concluir" method="post">
    <div class="row">
        @foreach(session('carrinho', []) as $item)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ $item['image_url'] }}" class="card-img-top" alt="{{ $item['nome'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nome'] }}</h5>
                        <p class="card-text">{{ $item['descricao'] }}</p>
                        <p class="card-text"><strong>Preço:</strong> R$ {{ $item['preco'] }}</p>
                        <p class="card-text"><strong>Quantidade:</strong> {{ $item['quantidade'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detalhes da Compra</h5>

                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade Total</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{ session('quantidadeTotal', 0) }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="totalCompra" class="form-label">Total da Compra</label>
                            <input type="text" class="form-control" id="totalCompra" name="totalCompra" value="R$ {{ session('totalCompra', 0) }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-success">Concluir Compra</button>

                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
