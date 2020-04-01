<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|max:91',
            'description'=>'required|max:191'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Coloque o titulo!',
            'title.max' => 'Tamanho maximo de 191 caracteres para o titulo!',
            'description.required'  => 'Coloque a descricao!',
            'description.max' => 'Tamanho maximo de 191 caracteres para a descricao!'
        ];
    }
}
