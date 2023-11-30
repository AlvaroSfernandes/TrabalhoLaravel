@extends('TemplateLoja.index2')


@section('contents')
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <a href="#"><div><img src="{{ $produto->image_url }}" class="card-img-top" alt="{{ $produto->name }}">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>
                            <p class="card-text"><strong>ID:</strong> {{ $produto->id }}</p>
                            <p class="card-text"><strong>Preço:</strong> R$ {{ $produto->preco }}</p>
                            <p class="card-text"><strong>Quantidade:</strong> {{ $produto->quantidade }}</p></div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
