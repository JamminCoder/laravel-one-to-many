<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public static function new(Request $request) {
        $person = new Person([
            "name" => $request->name,
            "age" => $request->age,
        ]);

        $person->save();

        return redirect("/");
    }
}
