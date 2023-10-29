<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */



    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);

        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        // not createFromTime , just use createFromTime to get correct time
        // check/change your own laravel time "timezone" in app.php at config file

        //  when the restaurant is open

        $earliestTime = Carbon::createFromTimeString('8:00:00');
        $lastTime = Carbon::createFromTimeString('23:00:00');

        if (!$pickupTime->between($earliestTime, $lastTime)) {
            $fail('Please choose the time between 8:00 - 11:00.');
        }
        //  (!) for if not
    }
}
