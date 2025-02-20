<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //campos obrigatórios
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'login' => 'required',
            'senha' => 'required'
        ];
    }

    public function messages (): array
    {
        return[
           'nome.required' => 'O campo NOME é obrigatório',
           'sobrenome.required' => 'O campo SOBRENOME é obrigatório',
           'cpf.required' => 'O campo CPF é obrigatório',
           'email.required' => 'O campo EMAIL é obrigatório',
           'telefone.required' => 'O campo TELEFONE é obrigatório',
           'login.required' => 'O campo LOGIN é obrigatório',
           'senha.required' => 'O campo SENHA é obrigatório'


        ];
    }


}
