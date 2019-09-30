<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    for($i=0;$i<=20;$i++){
        $aleatorio=
    }
    $numeros=array_fill(0,20,rand());
    
    for($contador=0;$contador<=count($numeros);$contador++){
        echo $numeros;
        echo $contador;
    }
    foreach($numeros as $contador){
        echo $contador;
        echo "<br>";
    }
    ?>
</body>
</html>