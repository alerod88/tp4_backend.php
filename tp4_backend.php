<h1>tp4</h1>

<h3>Ejercicio 1</h3>

<?php
$par=[2,4,6,8,10,12,14,16,18,20];
foreach($par as $numpar){
    print "$numpar <br>";
}

?>

<hr>

<h3>Ejercicio 2</h3>

<?php

$valores = ["Pedro", "Ana", 34, 1];
print_r($valores);

?>

<hr>

<h3>Ejercicio 3</h3>

<?php

$datos = [
    "Nombre:" => "Pedro",
    "Apellido"=> "Torres",
    "Dirección:" => "Av Mayor 3703",
    "Teléfono" => 1122334455,    
];  

print_r($datos);

?>

<hr>

<h3>Ejercicio 4</h3>

<?php

$ciudades =["Madrid", "Barcelona","Londres","New York","Los angeles","Chicago"];

echo "<p>La ciudad con el índice 0 tiene el nombre de $ciudades[0].</p>";

?>

<hr>

<h3>Ejercicio 5</h3>


<?php

$indices = [
    "Madrid" => "MD",
    "Barcelona" => "BCL",
    "Londres"=> "LD",
    "New York" => "NY",
    "Los Ángeles" => "LA",
    "Chicago" => "CCG",
];

echo "<p>El índice de Madrid es $indices[Madrid].</p>";

?>