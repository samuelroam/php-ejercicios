<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = [];
    for($i=0;$i<=20;$i++){
        array_push($numeros,rand(1,50));
    }
    
        echo "valor maximo del array: ".max($numeros);
        echo "<br>";
        echo "Valor minimo del array: ".min($numeros);
        echo "<br>";
        echo "suma de los elementos del array: ".array_sum($numeros);
        echo "<br>";
        $promedio = array_sum($numeros)/count($numeros);
        echo "promedio de los elementos del array: ".$promedio;
        echo "<br>";
    
    ?>
</body>
</html>