<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email|unique:users,email|max:255",
            "password" => "required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).+$/",
            "firstname" => "required|min:3|max:50|regex:/^[\pL\s'-]+$/u",
            "lastname" => "nullable|max:50|regex:/^[\pL\s'-]+$/u",
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "Votre adresse e-mail est obligatoire.",
            "email.email" => "Votre adresse e-mail doit être valide.",
            "email.unique" => "Cette adresse e-mail est déjà utilisée.",
            "email.max" => "Votre adresse e-mail ne doit pas dépasser 255 caractères.",

            "password.required" => "Le mot de passe est obligatoire.",
            "password.confirmed" => "Les mots de passe ne correspondent pas.",
            "password.min" => "Le mot de passe doit contenir au moins 8 caractères.",
            "password.regex" => "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.",

            "firstname.required" => "Le prénom est obligatoire.",
            "firstname.min" => "Le prénom doit contenir au moins 3 caractères.",
            "firstname.max" => "Le prénom ne doit pas dépasser 50 caractères.",
            "firstname.regex" => "Le prénom ne doit contenir que des lettres, espaces, apostrophes ou tirets.",

            "lastname.max" => "Le nom ne doit pas dépasser 50 caractères.",
            "lastname.regex" => "Le nom ne doit contenir que des lettres, espaces, apostrophes ou tirets.",
        ];
    }
}
