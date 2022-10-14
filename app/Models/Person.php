<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Person extends Model
{
    use HasFactory;

    protected $table = "persons";
    public $timestamps = false;

    protected $fillable = [
        "name",
        "age"
    ];

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
