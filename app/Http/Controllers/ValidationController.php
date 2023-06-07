<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Rules\Phone;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
    function index()
    {
        return response()->json([1,2,3]);
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'],
            'amount' => ['required', 'numeric', 'min:1', 'max:999999'],
            'gender' => ['nullable', 'string', 'in:male,female'],
            'zip' => ['required', 'digits:6'],
            'subscription' => ['nullable', 'boolean'],
            'agreement' => ['accepted'],
            'password' => ['required', 'string', 'min:7', 'confirmed'],
//            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:7', 'confirmed'],
            'current_password' => ['required', 'string', 'current_password'],
            'email' => ['required', 'string', 'email', 'exists:users,email'],
            'country_id' => ['required', 'integer', 'exists:coutries,id'],
//            'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'phone' => ['required', 'string', new Phone, Rule::unique('users')->ignore(123)],
            'website' => ['nullable', 'string', 'url'],
            'uuid' => ['nullable', 'string', 'uuid'],
            'ip' => ['nullable', 'string', 'ip'],
            'avatar' => ['required', 'file', 'image', 'max:1024'],
            'birth_date' => ['nullable', 'string', 'data'],
            'start_date' => ['required', 'string', 'data', 'after_or_equal:today'],
            'finish_date' => ['required', 'string', 'data', 'after:start_date'],
            'services' => ['nullable', 'array', 'min:1', 'max:10'], // [1,2,3,4,5]
            'services.*' => ['required', 'integer'], // [1,2,3,4,5]
            'delivery' => ['required', 'array', 'size:2'],
            'delivery.date' => ['required', 'string', 'date_format:Y.m.d'], // 2021-10-09
            'delivery.time' => ['required', 'string', 'date_format:H:i:s'], // 12:30:00
            'secret' => ['required', 'string', function ($attribute, $value, \Closure $fail) {
                if ($value !== config('example.secret')) {
                    $fail(__('Invalid private key.'));
                }
            }],
        ]);

        dd($validated);
    }
}
