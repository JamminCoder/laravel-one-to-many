<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Person;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public static function new(Request $request) {
        $owner = $request->owner;
        $person = Person::firstWhere("name", $owner)->get()[0];

        $car = new Car([
            "make" => $request->make,
            "model" => $request->model,
        ]);
        
        $person->cars()->save($car);

        return redirect("/");
    }
}
