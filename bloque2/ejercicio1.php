<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    /*en proceso*/
    for ($i=0;$i<=10;$i++){
        $numeros = array_fill(0,11,$i);
        for($j=$i;$j<0;$j--){
            if($i==0){
                $fact=0;
            }else{

            
            $fact=$fact*j;
        }
    }
        
    }
    $factorial = array_fill(0,11,$fact);
    foreach($numeros as $valor){
    echo $valor;
    }

    ?>
</body>
</html>