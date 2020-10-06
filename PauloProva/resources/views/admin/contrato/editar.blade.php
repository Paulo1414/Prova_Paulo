@extends('layout.site')

@section('titulo', 'Editar Contrato')

@section('conteudo')
    <div class="container">
        <h3>Editar Doce</h3>
        <div class="row">
            <form action="{{ route('admin.contrato.atualizar', $contrato->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                <button type="submit" cla                @include('admin.contrato.form')
ss="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
    @endsection()