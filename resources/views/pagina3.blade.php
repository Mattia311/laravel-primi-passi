<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina 3</h1>
    <header>
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
    </header>
    
</body>
</html>