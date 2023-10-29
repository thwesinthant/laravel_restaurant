<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'res_date',
        'tel_number',
        'guest_number',
        'table_id',
    ];

    // former code
    // protected $dates = [
    //     'res_date'
    // ];

    // laravel 10 update
    // The Eloquent model's deprecated $dates property has been removed. Your application should now use the $casts property:

    // updated code
    // protected $casts = [
    //     'res_date'
    // ];

    protected $casts = [
        'res_date' => 'datetime',
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}