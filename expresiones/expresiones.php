<?php
// Función para calcular la ecuación A
function exp1($x, $y) {
    $div = ($x / $y);
    return ((1 / $x) + (($x + $y) / 3) + (2 * $div));
}

// Función para calcular la ecuación B
function exp2($x) {
    $op1 = 2 * pow($x, 2);
    $sum1 = ((1 / 2) * $x) + (((3 + $x) / 2) * $op1);
    $sum2 = ((2 + 3) * $x);
    return $sum1 / $sum2;
}

// Función para calcular la ecuación C
function exp3($x) {
    $op1 = sqrt(pow((2 * $x), 2) + pow(3, 2));
    $op2 = sqrt(pow($x, 2));
    return ($op1 / 5) + $op2;
}

// Función para calcular la ecuación D
function exp4($x) {
    $op1 = (1 / 2) + (1 / 4) + (1 / 8);
    $op2 = pow($x, 1.0 / 3.0);
    $op3 = sqrt($x) / 2;
    $op4 = (3 * pow($x, 2)) / 4;
    return ($op1 * $op2) / ($op3 + $op4);
}

// Función para calcular la ecuación E
function exp5($x) {
    $op1 = (pow($x, 2) / 2) + (1 / sqrt($x));
    $op2 = 3 + ((1 / 2) * pow($x, 3));
    return sqrt($op1 / $op2);
}

// Definir valores para las ecuaciones
$x1 = 2;
$y1 = 4;
$x2 = 3;
$x3 = 2;
$x4 = 2;
$x5 = 4;

// Calcular los resultados llamando a las funciones
$res1 = exp1($x1, $y1);
$res2 = exp2($x2);
$res3 = exp3($x3);
$res4 = exp4($x4);
$res5 = exp5($x5);
?>

<html>
<head>
    <title>Expresiones</title>
</head>
<body>
    <h1>Expresiones</h1>   
    <h2>Declaración de variables y asignación de valores</h2>   
    
    <p>La respuesta de la ecuación A es: <?php echo $res1; ?></p>
    <img src="ecua1.jpg" alt="Ecuación A">

    <p>La respuesta de la ecuación B es: <?php echo $res2; ?></p>
    <img src="ecua2.jpg" alt="Ecuación B">

    <p>La respuesta de la ecuación C es: <?php echo $res3; ?></p>
    <img src="ecua3.jpg" alt="Ecuación C">

    <p>La respuesta de la ecuación D es: <?php echo $res4; ?></p>
    <img src="ecua4.jpg" alt="Ecuación D">

    <p>La respuesta de la ecuación E es: <?php echo $res5; ?></p>
    <img src="ecua5.jpg" alt="Ecuación E">

</body>
</html>
