<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Minds\Raygun\RaygunClient;
 // Asegúrate de importar la clase de Raygun

class insertMoviesWithErrorTest extends TestCase
{
    protected $raygunClient;

    protected function setUp(): void
    {
        parent::setUp();

        // Configura la clave API de Raygun
        $raygunApiKey = 'ReF2OooZJYgggruBpStoA';

        // Crea una instancia de RaygunClient
        $this->raygunClient = new RaygunClient($raygunApiKey);
    }

    public function testInsertDataIntoDatabase()
    {
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        if ($conexion->connect_error) {
            // Captura y registra el error en Raygun
            $this->raygunClient->SendException(new Exception("Error de conexión: " . $conexion->connect_error));
        } else {
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
            if (!$resultado) {
                // Captura y registra el error en Raygun
                $this->raygunClient->SendException(new Exception("Error al insertar datos en la base de datos"));
            }

            // Cierre de la conexión
            $conexion->close();
        }
    }
}
