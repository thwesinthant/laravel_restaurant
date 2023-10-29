<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        // Carbon is a PHP library for working with dates and times.
        // $lastDate = Carbon::now()->addWeek();

        if ($pickupDate->isPast()) {
            $fail('Please choose a date from today onwards.');
        }
    }
}
