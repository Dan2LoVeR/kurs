<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradesForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth("web")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>["required", "string", "min:5"],
            "result"=>["required", "integer"],
            "user_id"=> ["required", "exists:users,id"]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => auth(guard:"web")->id()
        ]);
    }
    
}
