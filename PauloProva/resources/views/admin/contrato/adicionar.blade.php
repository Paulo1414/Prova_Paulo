@extends('layout.site')

@section('titulo','Adicionar Contrato')

@section('conteudo')
<div class="container">
    <h3>Contratos</h3>
    <div class="row">
        <form action="{{ route('admin.contrato.salvar') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @include('admin.contrato.form')
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</div>
@endsection