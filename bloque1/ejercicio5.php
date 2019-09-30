<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    $edad=9;
    $altura=100;
    $acompañante=true;
    if($altura >=120 || $edad >=10){
        echo "pueden pasar";
    }else if ($edad >= 6 && $acompañante==true){
        echo "pueden pasar acompañados";
    }else{
        echo "NO PASARÁS!!!";
    }

    ?>
</body>
</html>