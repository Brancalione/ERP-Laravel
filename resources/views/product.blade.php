@extends("layout")
@section("pageTitle", "Novo Produto")
@section("content")
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
<div class="formulario-container">
    <h1 class="formulario-titulo">
        @if($product->id)
            Alterar Produto
        @else
            Novo Produto
            <a href="{{ route('products.index') }}" class="btn btn-info">Voltar</a>
        @endif
    </h1>
    @if($product->id)
    <form action="{{ route('products.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data" class="formulario-form">
        @method('PUT')
    @else
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="formulario-form">
    @endif
        @csrf

        <label for="name" class="formulario-label">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="formulario-input">
        <br>

        <label for="description" class="formulario-label">Descrição:</label>
        <input type="text" name="description" id="description" value="{{ $product->description }}" class="formulario-input">
        <br>
        
        <label for="stock" class="formulario-label">Estoque:</label>
        <input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="formulario-input">
        <br>

        <label for="price" class="formulario-label">Preço:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}" class="formulario-input">
        <br>

        <label for="category_id" class="formulario-label">Categoria:</label>
        <select name="category_id" id="category_id" class="formulario-select">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        <br>

        <label for="brand_id" class="formulario-label">Marca:</label>
        <select name="brand_id" id="brand_id" class="formulario-select">
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                {{ $brand->name }}
            </option>
            @endforeach
        </select>
        <br>

        <label for="photo" class="formulario-label">Insira a imagem do produto:</label>
        <input type="file" name="photo" id="photo" class="formulario-file">

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
