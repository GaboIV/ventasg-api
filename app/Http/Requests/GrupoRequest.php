<?php

namespace App\Http\Requests;

use App\Helpers\Functions;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GrupoRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function attributes() {
        return [
            'descripcion' => 'descripción',
            'touch' => 'a pantalla touch',
            'ordertouch' => 'orden en el touch',
            'color' => 'color'
        ];
    }

    public function rules() {
        $rules = [            
            'descripcion' => 'required|string'
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
