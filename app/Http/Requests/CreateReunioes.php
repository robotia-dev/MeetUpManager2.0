<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReunioes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'dta_acontecimento'=> 'required|date',
             'dta_encerramento' => 'required|date',
             'departamento' => 'required|integer',
             'sala'  => 'required|integer',
             'tipo'  => 'required|string',
             'nome'  => 'required|string',
             'organizador'=> 'required|integer'
        ];
    }
}
