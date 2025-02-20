<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColaboradorRequest;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    // listar Colaborador
    public function index()
    {
        //recuperar registros do banco de dados
        $colaboradores = Colaborador::orderByDesc('idColaborador')->get();
        return view('colaborador.index', ['colaboradores' => $colaboradores]);
    }

    // criar Colaborador
    public function create()
    {
        //retornar para a view
        return view('colaborador.create');
    }

    // salvar Colaborador
    public function store(ColaboradorRequest $request )
    {
        //validar dados da request
        $request -> validated();
        //cadastrar no banco de dados
        $colaborador = Colaborador::create($request->all());
        //retornar para a view 
        return redirect()->route('colaborador.show', ['colaborador'=>$colaborador->idColaborador])->with('success','Sucesso! Colaborador cadastrado');

    }

    // mostrar Colaborador
    public function show(Colaborador $colaborador)
    {
        //retornar para a view
        return view('colaborador.show', ['colaborador'=> $colaborador]);

    }

    // editar Colaborador
    public function edit(Colaborador $colaborador)
    {
        //retornar para a view
        return view('colaborador.edit', ['colaborador'=> $colaborador] );
    }

    // atualizar Colaborador
    public function update(ColaboradorRequest $request, Colaborador $colaborador)
    {
        //validar dados da request
        $request -> validated();
        //cadastrar no banco de dados
        $colaborador->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'login' => $request->login,
            'senha' => $request->senha
        ]
        );
        //retornar para a view 
        return redirect()->route('colaborador.show', ['colaborador'=>$colaborador->idColaborador])->with('success','Dados alterados com sucesso');
    }

    // deletar Colaborador
    public function destroy(Colaborador $colaborador)
    {
        //apagar registro
        $colaborador->delete();
        //retornar para a view 
        return redirect()->route('colaborador.index')->with('success','Cadastro apagado com sucesso');

    }
}
