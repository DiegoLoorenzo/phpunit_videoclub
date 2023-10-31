<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mysqli;

class deletTenDataTest extends TestCase
{
    public function testEliminarDiezRegistros()
    {
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        // Verificar la conexión
        if ($conexion->connect_error) {
            $this->fail("Error en la conexión a la base de datoss: " . $conexion->connect_error);
        }

        // Consulta para eliminar 10 registros de la tabla (ajusta según tu necesidad)
        $sql = "DELETE FROM clientes LIMIT 10";

        // Ejecutar la consulta de eliminación
        $resultado = $conexion->query($sql);

        // Verificar que la consulta se ejecutó correctamente
        $this->assertTrue($resultado, "Error al eliminar registros en la base de datos");

        // Cerrar la conexión
        $conexion->close();
    }
}
