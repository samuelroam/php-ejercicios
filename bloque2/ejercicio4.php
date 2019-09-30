<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    $hardware = "monitor teclado raton mando altavoz";
	$index = explode(" ", $hardware);
	$longitud = [];

    for ($i=0; $i < count($index); $i++) { 
		array_push($longitud, strlen($index[$i]));
	}

    $arrayAsociativo = array_combine($index, $longitud);
	print_r($arrayAsociativo);

    ?>
</body>
</html>