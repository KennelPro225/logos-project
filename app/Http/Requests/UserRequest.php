<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nom" => ["required", "string", "min:2"],
            "prenoms" => ["required", "string", 'min:2'],
            "email" => ["required", "email", "unique:users,email"],
            "annee_naissance" => ["date"],
            "photo" => ["image", "size:2048"],
            "eglise" => ["required"],
            "baptise_sain_esprit" => ["boolean"],
            "annee_de_bapteme" => ["date"],
            "annee_de_conversion" => ["date"],
            "service" => ["boolean"],
            "fonction_id" => ["integer"],
            "departement_id" => ["integer"],
            "password" => ["required", "string", "min:8"]
        ];
    }
}
