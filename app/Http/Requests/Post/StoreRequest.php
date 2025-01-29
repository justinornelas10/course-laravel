<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:2|max:500|unique:posts',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|integer',
            'posted' => 'required',
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)  {
        if($this->expectsJson())
        {
            $response = new Response($validator->errors(), 422);
            throw new ValidationException($validator, $response);
        }

    }
}
