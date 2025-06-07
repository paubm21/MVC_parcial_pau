<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Notas</title>
</head>
<body>
    <h2>Listado de Notas</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Descripción</th>
            <th>Nota</th>
        </tr>
        <?php foreach ($notas as $nota): ?>
        <tr>
            <td><?= $nota['id'] ?></td>
            <td><?= $nota['estudiante'] ?></td>
            <td><?= $nota['descripcion'] ?></td>
            <td><?= $nota['nota'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Promedio General: <?= number_format($promedio, 2) ?></h3>
    <br>
    <a href="index.php?action=registrar">Registrar Nueva Nota</a>
</body>
</html>
