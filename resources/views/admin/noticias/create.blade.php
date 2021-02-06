<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nueva noticia</title>
</head>
<body>
<a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    <h1>Crear nueva noticia</h1>
    <form method="POST" action="{{ route("admin.noticias.store") }}">
        @csrf
        <label>Título:</label>
        <input name="titulo" type="text">
        <label>Fecha:</label>
        <input name="fecha" type="date">
        <label>Autor:</label>
        <input name="autor" type="text">
        <label>Cuerpo:</label>
        <textarea rows="5" name="cuerpo"></textarea>
        <label>Foto:</label>
        <input name="foto" type="text">
        <button type="submit">Agregar nueva noticia</button>
    </form>
</body>
</html>