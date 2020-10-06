@extends('layout.site')

@section('titulo', 'Contrato')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-6">
                <h3>Lista de Contratos</h3>
            </div>
            <div class="col-6">
                <a class="btn btn-success"
                   href="{{ route('admin.contrato.adicionar') }}">
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
                        <th scope="col">Tipo do Contrato</th>
                        <th scope="col">Data do Contrato</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Nome do Tabeliao</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($contrato as $contrato)
                        <tr>
                            <td>{{ $contrato->id }}</td>
                            <td>{{ $contrato->TipoContrato }}</td>
                            <td>{{ $contrato->NomeEnvolvidos}}</td>
                            <td>{{ $contrato->DataContrato }}</td>
                            <td>{{ $contrato->valor }}</td>
                            <td>{{ $contrato->id_tabeliao }}</td>
                          
                         
                           
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.contrato.editar', $contrato->id) }}">Editar</a>
                                <form action="{{ route('admin.contrato.deletar', $contrato->id) }}" method="POST">
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
