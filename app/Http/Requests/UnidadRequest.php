<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function attributes() {
        return [
            'descripcion_pl' => 'descripción en plural',
            'descripcion_sg' => 'descripción en singular',
            'acro_pl' => 'acrónimo en plural',
            'acro_sg' => 'acrónimo en singular'
        ];
    }

    public function rules() {
        $rules = [            
            'descripcion_sg' => 'required|string',
            'descripcion_pl' => 'required|string',
            'acro_pl' => 'required|string',
            'acro_sg' => 'required|string'
        ];
        return $rules;
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => Functions::getValidatorMessage($validator),
        ], 422));
    }
}
