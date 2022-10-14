<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="/persons/new" method="POST">
            @csrf

            <h2>New Person</h2>
            <div>
                <label for="name">Name:</label><br/>
                <input name="name" type="text" />
            </div>

            <div>
                <label for="age">Age:</label><br/>
                <input name="age" type="text" />
            </div>
            <button>Create New Person</button>
        </form>

        <form action="/cars/new" method="POST">
            @csrf
            
            <h2>New Car</h2>
            <div>
                <label for="owner">Owner</label><br/>
                <input name="owner" type="text" />
            </div>

            <div>
                <label for="make">Make:</label><br/>
                <input name="make" type="text" />
            </div>

            <div>
                <label for="model">Model:</label><br/>
                <input name="model" type="text" />
            </div>

            <button>Give person new car</button>
        </form>

        <h1>Results</h1>
        
        <div>
            <h3>Persons</h3>
            @if (isset($persons))
                @foreach ($persons as $person)
                    <div>
                        {{ $person }}
                    </div>
                @endforeach
                
            @endif
        </div>
        
        <div>
            <h3>Cars</h3>
            @if (isset($cars))
                @foreach ($cars as $car)
                    <div>
                        {{ $car }}
                    </div>
                @endforeach
            @endif
        </div>
       
    </body>
</html>
