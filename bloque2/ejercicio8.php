<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
$nombreFichero = "ejercicio8.php";
if(file_exists($nombreFichero)){
    echo "El fichero ".$nombreFichero." existe";
} else{
    echo "El fichero ".$nombreFichero." no existe";
}
?>    
</body>
</html>