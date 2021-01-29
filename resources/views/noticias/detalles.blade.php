<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $id["titulo"] }}</title>
</head>
<body>
    <a href="{{route("id")}}">Volver a noticias</a>
    <h1>{{ $id["titulo"] }}</h1>
    <p>{{ $id["fecha"] }}</p>
    <h4>{{ $id["autor"] }}</h4>
    <img src="{{$id["fotos"]}}" />
    <p>{{ $id["cuerpo"] }}</p>
</body>
</html>