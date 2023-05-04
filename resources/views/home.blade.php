<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <a href="{{route('details', $movie->id)}}">
                            <h3>{{$movie->title}}</h3>
                        </a>
                        <h3>Nationality: {{$movie->nationality}}</h3>
                        <h3>Vote: {{$movie->vote}}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
