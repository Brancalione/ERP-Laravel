@extends("layout")
@section("pageTitle", "Nova Marca")
@section("content")
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
<div class="formulario-container">
    <h1 class="formulario-titulo">
        @if($brand->id)
            Alterar Marca
        @else
            Nova Marca
            <a href="{{ route('brands.index') }}" class="btn btn-info">Voltar</a>
        @endif
    </h1>
    @if($brand->id)
    <form action="{{ route('brands.update', ['id'=>$brand->id]) }}" method="post" enctype="multipart/form-data" class="formulario-form">
        @method('PUT')
    @else
    <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data" class="formulario-form">
    @endif
        @csrf

        <label for="name" class="formulario-label">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $brand->name }}" class="formulario-input">
        <br>

        <label for="photo" class="formulario-label">Insira a imagem da marca:</label>
        <input type="file" name="photo" id="photo" class="formulario-file">

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
