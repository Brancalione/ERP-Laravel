@extends("layout")
@section("pageTitle", "Loja")
@section("content")
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
    <h1 class="botaoprodu">Marcas </h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Inserir Marca</a>
    <table class="tabela">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Name</th>
            <th>Ações</th>
        </tr>
        @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>
                @if($brand->photo)
                <img src="{{ asset('storage/' . $brand->photo) }}" alt="{{ $brand->name }}">
                @endif
            </td>
            <td>{{ $brand->name }}</td>
            <td>
                <a href="{{ route('brands.edit', ['id' => $brand->id]) }}" class="btn btn-warning">Editar</a>
                <br>
                <form action="{{ route('brands.destroy', ['id' => $brand->id]) }}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger" >Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection