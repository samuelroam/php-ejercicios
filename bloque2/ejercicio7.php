<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $resultado = 0;
    function potencia($num1, $num2){
        $x=$num1;
        $y=$num2;
        $resultado=pow($x,$y);
        return $resultado;
    }
    echo potencia(5,6);
    ?>
</body>
</html>