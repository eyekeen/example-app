<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Phone implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!!preg_match('/^[0-9]{10,20}$/', $value)){
            $fail('The :attribute must be phone number');
        }
    }
}
