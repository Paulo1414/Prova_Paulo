@extends('layout.site')

@section('titulo', 'Contrato')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-6">
                <h3>Lista de Certidoes</h3>
            </div>
            <div class="col-6">
                <a class="btn btn-success"
                   href="{{ route('admin.certidao.adicionar') }}">
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
                        <th scope="col">Tipo da Certidao</th>
                        <th scope="col">Data do Certidao</th>
                        <th scope="col">Nome dos Envolvidos</th>
                        <th scope="col">Nome do Tabeliao</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($certidao as $certidao)
                        <tr>
                            <td>{{ $certidao->id }}</td>
                            <td>{{ $certidao->tipo }}</td>
                            <td>{{ $certidao->nomedosEnvolvidos }}</td>
                            <td>{{ $certidao->data }}</td>
                           
                            <td>{{ $certidao->nomeTabeliao }}</td>
                          
                           
                           
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.certidao.editar', $certidao->id) }}">Editar</a>
                                <form action="{{ route('admin.certidao.deletar', $certidao->id) }}" method="POST">
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
