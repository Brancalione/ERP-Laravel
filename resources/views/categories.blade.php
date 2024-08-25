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
        <h1 class="botaoprodu">Categorias</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Inserir Categoria</a>

    <table class="tabela">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Descrição</th>
            <th>Ações
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-warning" >Editar</a>
                <br>
                <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection