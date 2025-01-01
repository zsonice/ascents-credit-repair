<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'client_import_id',
        'account_name',
        'bureau',
        'account_no',
        'high_balance',
        'last_verified',
        'date_of_last_activity',
        'date_reported',
        'date_opened',
        'balance_owed',
        'closed_date',
        'account_rating',
        'account_description',
        'dispute_status',
        'creditor_type',
        'account_status',
        'payment_status',
        'creditor_remarks',
        'payment_amount',
        'last_payment',
        'term_length',
        'past_due_amount',
        'account_type',
        'payment_frequency',
        'credit_limit',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function clientImport()
    {
        return $this->belongsTo(ClientImport::class);
    }
}

