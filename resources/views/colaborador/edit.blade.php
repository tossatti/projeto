@extends('layouts.app')

@section('title', 'Editar dados do colaborador')

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


    <table class="table caption-top table-bordered table-striped table-hover text-center">
        <caption>Edição de dados do colaborador</caption>
    </table>
    <!-- Formulário de edição de dados no banco de dados - Tabela Colaborador -->
    <form action="{{ route('colaborador.update', ['colaborador' => $colaborador->idColaborador ] ) }}" method="POST">
        @csrf <!-- segurança -->
        @method('PUT') <!-- forçar método para atualização de dado -->

        <div class="row mb-3"> <!-- campo nome -->
            <label class="col-sm-1 col-form-label">Nome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome" value= "{{ old('nome', $colaborador->nome) }}">
            </div>
        </div><!-- /campo nome -->
        <div class="row mb-3"><!-- campo sobrenome -->
            <label class="col-sm-1 col-form-label">Sobrenome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Insira o sobrenome" value= "{{ old('sobrenome', $colaborador->sobrenome) }}">
            </div>
        </div><!-- /campo sobrenome -->
        <div class="row mb-3"><!-- campo CPF -->
            <label class="col-sm-1 col-form-label">CPF</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira o CPF" value= "{{ old('cpf', $colaborador->cpf) }}">
            </div>
        </div><!-- /campo CPF -->
        <div class="row mb-3"><!-- campo email-->
            <label class="col-sm-1 col-form-label">email</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="email" id="email" placeholder="Insira o email" value= "{{ old('email', $colaborador->email) }}">
            </div>
        </div><!-- campo email-->
        <div class="row mb-3"><!-- campo telefone -->
            <label class="col-sm-1 col-form-label">Telefone</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Insira o telefone" value= "{{ old('telefone', $colaborador->telefone) }}">
            </div>
        </div><!-- campo telefone -->
        <div class="row mb-3"><!-- campo login -->
            <label class="col-sm-1 col-form-label">Login</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="login" id="login" placeholder="Insira um nome para login" value= "{{ old('login', $colaborador->login) }}">
            </div>
        </div><!-- /campo login -->
        <div class="row mb-3"><!-- campo senha-->
            <label class="col-sm-1 col-form-label">Senha</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="senha" id="senha" placeholder="Insira uma senha" value= "{{ old('senha'), $colaborador->senha }}">
            </div>
        </div><!-- /campo senha--> 
        <div class="text-center"> <!-- Botão salvar -->
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <a href="{{ route('colaborador.index') }}" class="btn btn-outline-danger">Cancelar</a> 
        </div><!-- Botão salvar -->
    </form><!-- Formulário de edição de dados no banco de dados - Tabela Colaborador -->

@endsection
