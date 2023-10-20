<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class insertMoviesWithErrorTest extends TestCase
{

    public function testInsertDataIntoDatabase()
    {
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        // Datos a insertar (ajusta los valores según tus necesidades)
        $titulo = "ss";
        $director = "direc";
        $genero = "accion";
        $duracion = "ss";
        $fecha_publicacion = "2000-10-10";
        $existencias = "1";


        // Inserción de datos
        $sql = "INSERT INTO peliculas (titulo, director, genero, duracion, fecha_publicacion, existencias) 
        VALUES ('$titulo', '$director', '$genero', '$duracion', '$fecha_publicacion', '$existencias')";
        $resultado = $conexion->query($sql);

        // Verificación de la inserción
        $this->assertTrue($resultado, "Error al insertar datos en la base de datos");

        // Cierre de la conexión
        $conexion->close();
    }
}
