<?php

namespace App\Http\Requests;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|string",
            "location" => "required|string",
            "about" => "required|string",
            "featured_event" => "required|string",
            "language" => "required|string",
            "foods" => "required|string",
            "departure_date" => "required|date",
            "duration" => "required|string",
            "type" => "required|string",
            "price" => "required|integer",
        ];
    }
}
