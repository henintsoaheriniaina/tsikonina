<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
            "title" => "required|min:8|max:255|string",
            "prep_time" => "required|integer|min:1",
            "cook_time" => "required|integer|min:1",
            "servings" => "required|integer|min:1",
            "description" => "required|min:10|max:1000|string",
            "instructions" => "required|min:10|max:5000|string",
            "difficulty" => "required|in:easy,medium,advanced",
            "image_url" => "required|file|mimes:png,jpg,webp,PNG,JPG,JPEG|max:2048",
        ];
    }
    public function messages(): array
    {
        return [
            "title.required" => "Le titre est obligatoire.",
            "title.min" => "Le titre doit contenir au moins 8 caractères.",
            "title.max" => "Le titre ne peut pas dépasser 255 caractères.",
            "title.string" => "Le titre doit être une chaîne de caractères valide.",

            "prep_time.required" => "Le temps de préparation est obligatoire.",
            "prep_time.integer" => "Le temps de préparation doit être un nombre entier.",
            "prep_time.min" => "Le temps de préparation doit être d'au moins 1 minute.",

            "cook_time.required" => "Le temps de cuisson est obligatoire.",
            "cook_time.integer" => "Le temps de cuisson doit être un nombre entier.",
            "cook_time.min" => "Le temps de cuisson doit être d'au moins 1 minute.",

            "servings.required" => "Le nombre de portions est obligatoire.",
            "servings.integer" => "Le nombre de portions doit être un nombre entier.",
            "servings.min" => "Le nombre de portions doit être d'au moins 1.",

            "description.required" => "La description est obligatoire.",
            "description.min" => "La description doit contenir au moins 10 caractères.",
            "description.max" => "La description ne peut pas dépasser 1000 caractères.",
            "description.string" => "La description doit être une chaîne de caractères valide.",

            "instructions.required" => "Les instructions et les ingrédients sont obligatoires.",
            "instructions.min" => "Les instructions et les ingrédients doivent contenir au moins 10 caractères.",
            "instructions.max" => "Les instructions et les ingrédients ne peuvent pas dépasser 4000 caractères.",
            "instructions.string" => "Les instructions et les ingrédients doivent être une chaîne de caractères valide.",

            "difficulty.required" => "La difficulté est obligatoire.",
            "difficulty.in" => "La difficulté doit être: facile, moyenne ou avancée.",

            "image_url.required" => "Une image est obligatoire.",
            "image_url.file" => "Votre image doit être un fichier valide.",
            "image_url.mimes" => "Le format de votre image n'est pas valide.",
            "image_url.max" => "Votre image ne doit pas dépasser 2 Mo.",
        ];
    }
}
