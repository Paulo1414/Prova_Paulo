@extends('layout.site')

@section('titulo', 'Tabeliao')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-6">
                <h3>Lista de Tabelioes</h3>
            </div>
            <div class="col-6">
                <a class="btn btn-success"
                   href="{{ route('admin.tabeliao.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabeliao as $tabeliao)
                        <tr>
                            <td>{{ $tabeliao->id }}</td>
                            <td>{{ $tabeliao->nome }}</td>
                          
                           
                           
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.tabeliao.editar', $tabeliao->id) }}">Editar</a>
                                <form action="{{ route('admin.tabeliao.deletar', $tabeliao->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
