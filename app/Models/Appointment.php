<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_name',
        'appointment_date',
        'location',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
