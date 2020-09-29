<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form method="POST" action="submit">
        @csrf

        nombre <br>
        <input type="text" name="nombre"><br>

        edad <br>
        <input type="text" name="edad"><br>

        telefono <br>
        <input type="text" name="telefono"><br>

        email <br>
        <input type="text" name="email"><br>

        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
