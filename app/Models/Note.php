<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // Specify the table associated with the model (optional if not following Laravel's convention)
    protected $table = 'notes';

    // Specify the primary key (if different from default 'id')
    protected $primaryKey = 'id';

    // Set this to true if your table uses timestamps
    public $timestamps = true;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'notes',
        'level',
        'created_by',
        'client_id'
    ];

    // Define the relationship with the Client model
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Define the relationship with the User model
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}