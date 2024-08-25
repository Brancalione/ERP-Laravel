@extends("layout")
@section("pageTitle", "Loja")
@section("content")
@section("style")

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
@endsection
@section("content")
        <div class="envoltorio">
        <nav class="barra-lateral">
            <div class="cabecalho-barra-lateral">
                <img src="{{ asset('storage/logo.png') }}" alt="Logo Jogo do Bicho Store" width="150" height="150">
                
            </div>
            <ul class="lista-componentes">
                <li><a href="{{ route('products.index') }}">Produtos</a></li>
                <li><a href="{{ route('stocks.index') }}">Estoque</a></li>
                <li><a href="{{ route('brands.index') }}">Marcas</a></li>
                <li><a href="{{ route('categories.index') }}">Categorias</a></li>
            </ul>
        </nav>
        <div class="conteudo">
            <h1 class="conteudo">Bem-vindo ao Jogo do Bicho ERP</h1>
        </div>  
@endsection