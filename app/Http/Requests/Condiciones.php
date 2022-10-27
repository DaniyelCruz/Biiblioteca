<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Condiciones extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ISBN'=> 'required|min:13',
            'TITULO'=>'required',
            'AUTOR'=>'required',
            'PAGINAS'=>'required',
            'EDITORIAL'=>'required',
            'EMAIL'=>'required'
        ];
    }
}
