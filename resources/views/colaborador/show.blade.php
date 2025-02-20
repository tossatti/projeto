@extends('layouts.app')

@section('title', 'Dados do colaboradores')

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
        <caption>Dados do colaborador cadastrado</caption>
    </table>
        @csrf <!-- segurança -->
        <div class="row mb-3"> <!-- campo nome -->
            <label class="col-sm-1 col-form-label">Nome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome" disabled value= "{{ $colaborador->nome }}">
            </div>
        </div><!-- /campo nome -->
        <div class="row mb-3"><!-- campo sobrenome -->
            <label class="col-sm-1 col-form-label">Sobrenome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Insira o sobrenome" disabled value= "{{ $colaborador->sobrenome }}">
            </div>
        </div><!-- /campo sobrenome -->
        <div class="row mb-3"><!-- campo CPF -->
            <label class="col-sm-1 col-form-label">CPF</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira o CPF" disabled value= "{{ $colaborador->cpf }}">
            </div>
        </div><!-- /campo CPF -->
        <div class="row mb-3"><!-- campo email-->
            <label class="col-sm-1 col-form-label">email</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="email" id="email" placeholder="Insira o email" disabled value= "{{ $colaborador->email }}">
            </div>
        </div><!-- campo email-->
        <div class="row mb-3"><!-- campo telefone -->
            <label class="col-sm-1 col-form-label">Telefone</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Insira o telefone" disabled value= "{{ $colaborador->telefone }}">
            </div>
        </div><!-- campo telefone -->
        <div class="row mb-3"><!-- campo login -->
            <label class="col-sm-1 col-form-label">Login</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="login" id="login" placeholder="Insira um nome para login" disabled value= "{{ $colaborador->login }}">
            </div>
        </div><!-- /campo login -->
        <!-- Botão centralizado -->
        <table class="table text-center">
            <td class="text-center align-middle"> 
                <a href="{{ route('colaborador.index') }}" class="btn btn-outline-success" aria-current="page">Voltar</a>  
            </td>
        </table><!-- /botão centralizado -->
        
        
    

@endsection
