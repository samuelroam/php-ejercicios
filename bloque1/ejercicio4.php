<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<?php

$palabra = "asdsa";
$palabrainv = strrev($palabra);
if($palabra==$palabrainv){
echo("La palabra ".$palabra . " es un palindromo");
}else{
echo("La palabra ".$palabra . " no es un palindromo");
}
?>
    
</body>
</html>