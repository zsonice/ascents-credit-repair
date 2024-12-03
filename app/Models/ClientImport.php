<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientImport extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the name matches Laravel's convention)
    protected $table = 'client_import';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'client_id',
        'transUnionScore',
        'experianScore',
        'equifaxScore',
        'cms_source',
    ];

    // Define the relationship to the Client model
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
