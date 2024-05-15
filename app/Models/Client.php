<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'email',
        'date_of_birth',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'mobile_main',
        'mobile_alt',
        'mobile_work',
        'fax',
        'previous_address',
        'previous_city',
        'previous_state',
        'previous_zip_code',
        'previous_country',
        'status',
        'start_date',
        'assigned_to'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
