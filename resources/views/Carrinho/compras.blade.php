@extends('TemplateLoja.index2')

@section('contents')
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ $produto->image_url }}" class="card-img-top" alt="{{ $produtos->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">{{ $produto->descricao }}</p>
                        <p class="card-text"><strong>ID:</strong> {{ $produto->id }}</p>
                        <p class="card-text"><strong>Preço:</strong> R$ {{ $produto->preco }}</p>
                        <p class="card-text"><strong>Quantidade:</strong> {{ $produtos->quantidade }}</p>

                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary">Adicionar Quantidade</button>
                            <button type="button" class="btn btn-outline-primary">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Carrinho</h5>

                    <ul>
                        <li>Produto 1 - Quantidade: 2</li>
                        <li>Produto 2 - Quantidade: 1</li>

                    </ul>
                    <p>Total da Compra: R$ 49.98</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comprar</h5>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="productCode" class="form-label">Código do Produto</label>
                            <input type="text" class="form-control" id="productCode" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="quantity" placeholder="">
                        </div>

                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de Compras</h5>

                    <ul>
                        <li>Email: email1@example.com - Compra: Produto A, Produto B</li>
                        <li>Email: email2@example.com - Compra: Produto C</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
