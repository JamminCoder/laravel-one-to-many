<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        "make",
        "model"
    ];

    public function person() {
        return $this->belongsTo(Person::class);
    }
}
