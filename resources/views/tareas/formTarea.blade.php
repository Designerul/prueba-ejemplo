<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Tarea</title>
</head>
<body>
    <h1>Agregar Tarea</h1>
    <form action="/tarea" method="POST">
        @csrf
            <label for="tarea">Nombre de la Tarea</label><br>
            <input type="text" name="tarea">
            <br>
            <label for="descripcion">Descripcion</label><br>
            <textarea name="descripcion" id="descripcion" cols="10" rows="5"></textarea>
            <br>
            <label for="categoria">Categoria</label><br>
            <select name="categoria" id="categoria">
                <option value="Escuela">Escuela</option>
                <option value="Trabajo">Trabajo</option>
            </select>
            <input type="submit" value="Guardar">
    </form>
</body>
</html>