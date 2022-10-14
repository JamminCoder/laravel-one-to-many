<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Person;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public static function new(Request $request) {
        $owner = $request->owner;
        error_log($owner);

        $person = Person::where("name", $owner)->limit(1)->get();
        
        if (count($person) >= 1) {
            $person = $person[0];
        } else {
            return "That owner does not exist";
        }

        error_log($person);

        $car = new Car([
            "make" => $request->make,
            "model" => $request->model,
        ]);
        
        $person->cars()->save($car);

        return redirect("/");
    }
}
