<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nota</title>
</head>
<body>
    <h2>Registrar Nueva Nota</h2>
    <form method="POST" action="index.php?action=registrar">
        <label>Estudiante:</label><br>
        <input type="text" name="estudiante" required><br><br>

        <label>Descripción:</label><br>
        <input type="text" name="descripcion" required><br><br>

        <label>Nota:</label><br>
        <input type="number" name="nota" step="0.01" min="0" max="5" required><br><br>

        <input type="submit" value="Guardar Nota">
    </form>
    <br>
    <a href="index.php?action=listar">Ver Lista de Notas</a>
</body>
</html>
