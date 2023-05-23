<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePagesRequest extends FormRequest
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
            'title' => ['required', 'unique:pages,title'],
            'short_title' => ['required'],
            'page_description' => ['required'],
            'slug' => ['required', 'unique:pages,slug'],
            'meta_title' => ['required', 'max:255'],
            'meta_description' => ['required', 'max:500'],
            'publish' => ['required']
        ];
    }
}
