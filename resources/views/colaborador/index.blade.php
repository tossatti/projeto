@extends('layouts.app')

@section('title', 'Lista de colaboradores')

@section('content')
    
    <!-- alertas -->
    @if($errors->any())<!-- mensagem de erro -->
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif<!-- mensagem de erro -->
    @if(session('success'))<!-- mensagem de sucesso -->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif<!-- mensagem de sucesso -->
    <!-- /alertas -->

    <div class="table-responsive"><!-- /tabela responsiva -->
        <table class="table caption-top table-bordered table-striped table-hover text-center align-middle"><!-- tabela com dados -->
            <caption> <h4>Lista de colaboradores</h4> </caption>    
                <thead><!-- cabeçalho da tabela -->
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Login</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead><!-- /cabeçalho da tabela -->
                <tbody><!-- dados do banco de dados -->
                    @forelse ($colaboradores as $colab)
                        <tr><!-- tabela de dados -->  
                            <td>{{ $colab->nome }}</th>
                            <td>{{ $colab->sobrenome }}</td>
                            <td>{{ $colab->cpf }}</td>
                            <td>{{ $colab->email }}</td>
                            <td>{{ $colab->telefone }}</td>
                            <td>{{ $colab->login }}</td>
                            <td class="col col-1">
                                <a href="{{ route('colaborador.show', ['colaborador'=>$colab->idColaborador])}}" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-eye-fill"></i> 
                                </a>  
                                <a href="{{ route('colaborador.edit', ['colaborador'=>$colab->idColaborador])}}" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('colaborador.destroy', ['colaborador'=>$colab->idColaborador])}}"  method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Tem certeza que deseja apagar esse registro?')">
                                    <i class="bi bi-eraser-fill"></i>   
                                    </button>
                                </form>
                            </td>
                            @empty
                                <span>Nenhum colaborador encontrado</span>
                            @endforelse
                        </tr><!-- /tabela de dados -->
                </tbody><!-- /dados do banco de dados -->
        </table><!-- /tabela com dados -->
    </div><!-- /tabela responsiva -->
    
   
        

@endsection
