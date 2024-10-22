<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$carros = [
    ["nombre" => "911", "precio" => 3500000],
    ["nombre" => "LaFerrari", "precio" => 20000000],
    ["nombre" => "GTR", "precio" => 3000000],
    ["nombre" => "Supra", "precio" => 1800000],
    ["nombre" => "P1", "precio" => 14000000],
];

usort($carros, function($a, $b) {
    return $a['precio'] <=> $b['precio'];
});

echo "Carros ordenados por precio:"."<br>";
foreach ($carros as $carro) {
    echo "Nombre: " . $carro['nombre'] . ", Precio: " . $carro['precio'] . "<br>";
}

array_push($carros, ["nombre" => "Skyline GTR R34", "precio" => 320000]);
array_push($carros, ["nombre" => "Silvia", "precio" => 360000]);

echo "Carros después de agregar 2 más:"."<br>";
foreach ($carros as $carro) {
    echo "Nombre: " . $carro['nombre'] . ", Precio: " . $carro['precio'] ."<br>";
}
?>


</body>
</html>