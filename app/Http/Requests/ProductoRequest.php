<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\Functions;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductoRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function attributes() {
        return [
            'codigo' => 'código',
            'codigoAlt' => 'código alternativo',
            'descripcion' => 'descripción',
            'unidad_id' => 'unidad',
            'presentacion' => 'presentación',
            'marca_id' => 'marca',
            'almacen_id' => 'almacén',
            'grupo_id' => 'grupo',
            'subgrupo_id' => 'subgrupo',
            'imagen' => 'imagen',
            'precio1' => 'precio 1',
            'precio2' => 'precio 2',
            'precio3' => 'precio 3',
            'costo' => 'costo',
            'alicuota' => 'alicuota'
        ];
    }

    public function rules() {
        $rules = [
            'codigo' => 'required|string|unique:productos',
            'descripcion' => 'required|string',
            'unidad_id' => 'required|numeric',
            'presentacion' => 'required|string',
            'marca_id' => 'required|numeric',
            'almacen_id' => 'required|numeric',
            'grupo_id' => 'required|numeric',
            'precio1' => 'required|numeric',
            'costo' => 'required|numeric',
            'alicuota' => 'required|numeric'
        ];
        if ($this->isMethod('PUT')) {
            $rules['codigo'] = 'required|string';
        }
        return $rules;
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => Functions::getValidatorMessage($validator),
        ], 422));
    }
}
