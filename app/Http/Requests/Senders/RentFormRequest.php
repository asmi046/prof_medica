<?php

namespace App\Http\Requests\Senders;

use Illuminate\Foundation\Http\FormRequest;

class RentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product.required' => 'Поле "Продукт" должно быть заполнено',
            'phone.required' => 'Поле "Телефон" должно быть заполнено',
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
            "product" => ['required','string'],
            "phone" => ['required','string'],
        ];
    }
}
