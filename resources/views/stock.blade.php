@extends("layout")
@section("pageTitle", "Balanço")
@section("content")
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
<div class="formulario-container">
    <h1 class="formulario-titulo">
        Fazer balanço
        <a href="{{ route('products.index') }}" class="btn btn-info">Voltar</a>
    </h1>
    
    <form id="stockForm" action="{{ route('stocks.update', ['id' => $product->id]) }}" method="POST" class="formulario-form">
        @method('PUT')
        @csrf
        <input type="hidden" name="action" id="action" value="update">
        
        <label for="stock" class="formulario-label">Quantidade atual :</label>
        <td>{{ $product->stock }}</td>
        <br>
        <input type="number" name="stock" id="stock" value="0" class="formulario-input">
        <br>
        
        <button type="submit" onclick="setAction('update')" class="btn btn-success">Balanço</button>
        <button type="submit" onclick="setAction('soma')" class="btn btn-warning">Somar</button>
        <button type="submit" onclick="setAction('diminui')" class="btn btn-danger">Diminuir</button>
    </form>
</div>

<script>
    function setAction(action) {
        document.getElementById('action').value = action;
    }
</script>
@endsection
