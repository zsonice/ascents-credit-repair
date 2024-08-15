<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsLogin extends Model
{
    use HasFactory;
    protected $table = 'cms_login'; // Specifies the table name

    protected $fillable = [
        'username',
        'password',
        'cms_type',
        'client_id',
    ];
     // If you're using Laravel 8 or later and want to use the updated factory syntax:
     protected $guarded = []; // By default, all attributes are mass assignable

     // Add any relationships, methods, or custom functionality here if needed
    // Define the inverse relationship with Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
