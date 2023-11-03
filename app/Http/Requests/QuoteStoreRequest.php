<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
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
            'author' => 'nullable|max:60',
            'published_year' => 'nullable|integer|date_format:Y|before:today|max-digits:4',
            'message' => 'required|string',
        ];
    }

    public function messages():array{
        return [
            'author.alpha' => 'El nombre autor solo puede contener letras',
            'author.max' => 'El nombre del autor no puede tener más de 60 caracteres',
            'published_year.integer' => 'El año de publicación debe ser un número entero',
            'published_year.date_format' => 'El año de publicación debe tener el formato YYYY',

        ];           
    }
}
