<?php

include_once "Persona.php";
$lista = [
    new Persona("Fulano","1969-11-02","5512345678"),
    new Persona("Viera","1980-12-21","5512345678"),
    new Persona("Iñaki","2003-04-08","5512345678"),
    new Persona("Karla","2002-01-29","55134567678"),
    new Persona("Michelle","2004-07-26","551845678"),
    new Persona("Joel","2002-07-17","559875678"),
    new Persona("Pepe","1999-12-27","5512345678"),
    new Persona("Jose","1563-04-02","55127983278"),
    new Persona("Juan","1969-03-15","559890321"),
    new Persona("Pinino","1969-08-15","556729"),
];

function calcularEdad($fechaNacimiento) {
    $fechaNac = new DateTime($fechaNacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($fechaNac)->y;
    return $edad;
}

echo "Todo bien";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Personas</title>
        <style>
            td {
                background-color:#bfedbc ;
            }
        </style>
    </head>
    <body>
        <h1>Lista de Personas</h1>
        <table border>
            
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach($lista as $p): ?>
                <tr>
                    <td><?php echo $p->getNombre(); ?></td>
                    <td><?php echo $p->getFecNac(); ?></td>
                    <td><?php echo calcularEdad($p->getFecNac()); ?> años</td>
                    <td><?php echo $p->getTelefono(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
