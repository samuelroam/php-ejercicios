<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $filas=0;
    $columnas=0;
    echo "<table style='border:1px solid black'";
    for($filas=0;$filas<4;$filas++){
        echo "<tr></tr>";
    
    for($columnas=0;$columnas<8;$columnas++){
        echo "<td style='border:1px solid black'>".rand(1,10)."</td>";
    }
    $columnas=0;
    }
    echo "</table>";
    ?>
</body>
</html>