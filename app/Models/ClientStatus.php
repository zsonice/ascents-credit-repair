<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientStatus extends Model
{
    use HasFactory;

     // Define the table name if it doesn't follow Laravel's naming convention
     protected $table = 'client_status';

     // Define the primary key if it's not the default 'id'
     protected $primaryKey = 'id';
 
     // Define if the primary key is auto-incrementing
     public $incrementing = true;
 
     // Define the type of the primary key
     protected $keyType = 'int';
 
     // If you want to disable timestamps, you can set this to false
     public $timestamps = true;
 
     // Define the fillable attributes to allow mass assignment
     protected $fillable = [
         'client_id',
         'status',
         'remarks',
         'updated_by',
     ];
 
     // Define the relationships
 
     /**
      * Get the client associated with the client status.
      */
     public function client()
     {
         return $this->belongsTo(Client::class, 'client_id');
     }
 
     /**
      * Get the user that updated the client status.
      */
     public function user()
     {
         return $this->belongsTo(User::class, 'updated_by');
     }
}
