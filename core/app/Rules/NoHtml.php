<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
/**
 * NoHtml validation rule to ensure that a given value does not contain any HTML tags.
 */

class NoHtml implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value !== strip_tags($value)) {
            $fail("The {$attribute} field must not contain HTML tags.");
        }
    }
}
