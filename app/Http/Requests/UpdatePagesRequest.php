<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePagesRequest extends FormRequest
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
            'title' => ['required'],
            'short_title' => ['required'],
            'edit_description' => ['required'],
            'slug' => ['required'],
            'meta_title' => ['required', 'max:255'],
            'meta_description' => ['required', 'max:500'],
        ];
    }
}
