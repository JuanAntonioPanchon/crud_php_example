<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $isbn = $_POST['isbn'];
    $autor = $_POST['autor'];

    try {
        $sql = "INSERT INTO libros (nombre, descripcion, precio, stock, isbn, autor) VALUES (:nombre, :descripcion, :precio, :stock, :isbn, :autor)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'stock' => $stock, 'isbn' => $isbn, 'autor' => $autor]);

        $message = 'Libro añadido a la base de datos!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el nuevo libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Jabón</title>
</head>
<body>
<h2>Añadir nuevo Jabón</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" id="isbn" required>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor" required>
    <br>
    <input type="submit" value="Añadir Libro">
</form>

</body>
</html>
