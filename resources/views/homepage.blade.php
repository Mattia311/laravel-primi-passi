<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
            <ul>
                @foreach ($pagine as $pagina)
                    @if ($pagina == '')
                        <li><a href="http://localhost:8000/">{{$pagina}}</a></li>
                    @else
                        <li><a href="http://localhost:8000/{{$pagina}}">{{$pagina}}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    <div>
        <h1>{{$hello}}</h1>

        <p>{{$name}} {{$lastname}}</p>
    </div>

    
</body>
</html>