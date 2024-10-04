CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    isbn VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL
);

INSERT INTO libros (nombre, descripcion, precio, stock, ISBN, autor) VALUES
('Alas de Sangre', 'libro de aventuras', 19.95, 50, 0-7645-2641-3, 'Rebeca Yarros'),
('Harry Potter y el cáliz de fuego', 'libro de fantasías', 12.30, 40, 0-5432-2551-7, 'J.K Rowling'),
('Harry Potter y la cámara secreta', 'libro de fantasías', 14.30, 20, 1-8882-2551-7, 'J.K Rowling'),
('El principito', 'libro de búsqueda de la verdad a través de la amistad', 7.30, 16, 4-1111-2551-7, 'Antoine de Saint-Exupéry'),
('Alas de Hierro', 'libro de aventuras', 19.95, 50, 2-2254-1544-0, 'Rebeca Yarros')
