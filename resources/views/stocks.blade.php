@extends("layout")
@section("pageTitle", "Loja")
@section("content")
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
<div class="envoltorio">
    <nav class="barra-lateral">
    <div class="cabecalho-barra-lateral">
        <a href="{{ route('home.index') }}">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo Jogo do Bicho Store" width="150" height="150">
    </a>
        </div>
        <ul class="lista-componentes">
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('products.index') }}">Produtos</a></li>
            <li><a href="{{ route('stocks.index') }}">Estoque</a></li>
            <li><a href="{{ route('brands.index') }}">Marcas</a></li>
            <li><a href="{{ route('categories.index') }}">Categorias</a></li>
        </ul>
    </nav>
<div class="container">
    <h1 class="botaoprodu">Estoque</h1>

    <table class="tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <a href="{{ route('stocks.edit', ['id' => $product->id]) }} " class="btn btn-warning">Alterar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
