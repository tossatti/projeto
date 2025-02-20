@extends('layouts.app')

@section('title', 'Cadastro de colaborador')

@section('content')

    
    <table class="table caption-top table-bordered table-striped table-hover text-center">
        <caption><h4>Cadastro de colaboradores</h4></caption>
    </table>
    <!-- Formulário de salvamento de dados no banco de dados - Tabela Colaborador -->
    <form action="{{ route('colaborador.store') }}" method="post">
        @csrf <!-- segurança -->
        <div class="row mb-3"> <!-- campo nome -->
            <label class="col-sm-1 col-form-label">Nome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome" value= "{{ old('nome') }}">
            </div>
        </div><!-- /campo nome -->
        <div class="row mb-3"><!-- campo sobrenome -->
            <label class="col-sm-1 col-form-label">Sobrenome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Insira o sobrenome" value= "{{ old('sobrenome') }}">
            </div>
        </div><!-- /campo sobrenome -->
        <div class="row mb-3"><!-- campo CPF -->
            <label class="col-sm-1 col-form-label">CPF</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira o CPF" value= "{{ old('cpf') }}">
            </div>
        </div><!-- /campo CPF -->
        <div class="row mb-3"><!-- campo email-->
            <label class="col-sm-1 col-form-label">email</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="email" id="email" placeholder="Insira o email" value= "{{ old('email') }}">
            </div>
        </div><!-- campo email-->
        <div class="row mb-3"><!-- campo telefone -->
            <label class="col-sm-1 col-form-label">Telefone</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Insira o telefone" value= "{{ old('telefone') }}">
            </div>
        </div><!-- campo telefone -->
        <div class="row mb-3"><!-- campo login -->
            <label class="col-sm-1 col-form-label">Login</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="login" id="login" placeholder="Insira um nome para login" value= "{{ old('login') }}">
            </div>
        </div><!-- /campo login -->

        <div class="row mb-3"><!-- campo senha-->
            <label class="col-sm-1 col-form-label">Senha</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="senha" id="senha" placeholder="Insira uma senha" value= "{{ old('senha') }}">
            </div>
        </div><!-- /campo senha-->
        <div class="text-center"> <!-- Botão salvar e limpar -->
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            <button type="reset" class="btn btn-outline-danger">Limpar</button>
        </div><!-- Botão salvar -->    
    </form><!-- Formulário de salvamento de dados no banco de dados - Tabela Colaborador -->

    
  






    
@endsection
