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
        <h1 class="botaoprodu">Produtos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Inserir Produto</a>

        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->photo)
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-warning">Editar</a>
                        <br>
                        <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                            @method("delete")
                            @csrf
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection