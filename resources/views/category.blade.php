@extends("layout")
@section("pageTitle", "Nova Categoria")
@section("content")
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
<div class="formulario-container">
    <h1 class="formulario-titulo">
        @if($category->id)
            Alterar Categoria
        @else
            Nova Categoria
            <a href="{{ route('categories.index') }}" class="btn btn-info">Voltar</a>
        @endif
    </h1>
    @if($category->id)
    <form action="{{ route('categories.update', ['id'=>$category->id]) }}" method="post" enctype="multipart/form-data" class="formulario-form">
        @method('PUT')
    @else
    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" class="formulario-form">
    @endif
        @csrf

        <label for="name" class="formulario-label">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" class="formulario-input">
        <br>

        <label for="description" class="formulario-label">Descrição:</label>
        <input type="text" name="description" id="description" value="{{ $category->description }}" class="formulario-input">
        <br>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
