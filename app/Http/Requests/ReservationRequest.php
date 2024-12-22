<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'prihod' => 'required|date|after_or_equal:today',
            'odhod' => 'required|date|after:arrival_date',
            'room_id' => 'required|exists:rooms,id',
            'ime' => 'required|string|max:255',
            'email' => 'required|email',
            'telefon' => 'required|regex:/^(\+\d{1,3}\s?)?1?\-?\s?\(?\d{3}\)?[\s\-]?\d{3}[\s\-]?\d{4}$/|max:20',
            'sporocilo' => 'nullable|string',
            //'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ];
    }
}
