<?php


namespace App\Http\Requests;

use App\Helpers\Functions;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FileRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function attributes() {
        return [
            'id' => 'id del producto',
            'imagen' => 'imagen'
        ];
    }

    public function rules() {
        $rules = [  
            'id' => 'required',      
            'imagen' => 'required',
            'imagen' => 'mimes:jpeg,bmp,png'
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
