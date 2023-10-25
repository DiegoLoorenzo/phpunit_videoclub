<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Faker\Factory;

class insertThirtyDateTest extends TestCase
{
    public function testInsertDataIntoDatabase()
    {
        // Crear un objeto Faker para generar datos aleatorios
        $faker = Factory::create();

        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        // Generar y insertar 30 registros
        for ($i = 0; $i < 30; $i++) {
            $nombre = $faker->firstName;
            $apellidos = $faker->lastName;
            $direccion = $faker->streetAddress;
            $telefono = $faker->phoneNumber;
            $correo_electronico = $faker->email;
            $fecha_nacimiento = $faker->date;

            // Inserción de datos
            $sql = "INSERT INTO clientes (nombre, apellidos, direccion, telefono, correo_electronico, fecha_nacimiento) 
            VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$correo_electronico', '$fecha_nacimiento')";
            $resultado = $conexion->query($sql);

            // Verificación de la inserción
            $this->assertTrue($resultado, "Error al insertar datos en la base de datos");
        }

        // Cierre de la conexión
        $conexion->close();
    }
}
