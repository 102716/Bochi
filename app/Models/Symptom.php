<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tags',
        'disease_id'
    ];

    public function disease(){
        return $this->belongsTo(Disease::class, 'disease_id');
    }
}
