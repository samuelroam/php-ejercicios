<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    
    $naturales = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	$factoriales = [];
	$naturalFactorizado = 0;

    for ($i=0; $i < count($naturales); $i++) { 
		array_push($factoriales, Factorial($naturales[$i]));
    }
    foreach($factoriales as $valor){
        echo $valor."<br>";
    }

    function Factorial($num){ 
    $factorial = 1; 
    for ($i = 1; $i <= $num; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
	} 
	   

    ?>
</body>
</html>