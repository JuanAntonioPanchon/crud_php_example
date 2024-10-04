<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libro = $stmt->fetchAll();
?>

<h2>Listado de Libros</h2>

<!-- Botón para crear un nuevo libro -->
<a href="create.php">Crear nuevo Libro</a>
<br><br>

<ul>
<?php foreach ($libros as $libro): ?>
    <li>
        <?php echo $libro['nombre']; ?> - $<?php echo $libro['precio'];?> - $<?php echo $libro['autor']; ?>
        <a href="edit.php?id=<?php echo $libro['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
