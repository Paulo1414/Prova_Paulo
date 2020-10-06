@extends('layout.site')

@section('titulo','Adicionar Certidao')

@section('conteudo')
<div class="container">
    <h3>Certidoes</h3>
    <div class="row">
        <form action="{{ route('admin.certidao.salvar') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @include('admin.certidao.form')
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</div>
@endsection