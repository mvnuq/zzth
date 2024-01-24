<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this ->merge([
            // 'slug'=> Str::slug($this ->title)
            'slug' => Str($this -> slug)->slug() 

        ]);
    }
    static public function Myrules()
    {
        return[
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",


        ];



    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",

        ];
    }
}
