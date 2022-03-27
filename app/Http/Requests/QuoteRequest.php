<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modelo' => 'required',
            'nombre_completo' => 'required|regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'numero_celular' => 'required|digits:10|integer',
            'departamento' =>'required|regex:/^[\pL\s]+$/u',
            'ciudad' => 'required|regex:/^[\pL\s]+$/u'
        ];
    }
}

