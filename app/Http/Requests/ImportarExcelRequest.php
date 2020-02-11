<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportarExcelRequest extends FormRequest
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
            'documento' => 'required|mimes:xlsx,xls,csv,txt'
        ];
    }

    public function messages()
    {
        return [
            'documento.required' => 'Debes seleccionar un archivo.',
            'documento.mimes' => 'El archivo debe ser de tipo xlsx, csv o xls.'
        ];
    }
    
}
