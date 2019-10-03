<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = strtolower($_POST["nombre"]);   
    $correo = strtolower($_POST["correo"]); 
    ?>
    <form action="#" method="post">
        <p>Introduzca su nombre <input type="text" name="nombre"></p>
        <br>
        <p>Introduzca su correo <input type="text" name="correo" placeholder="emilio"></p>
        <br>
        <input type="submit">
        <br><br>
        <?php
        if($nombre==""){
            echo "<b>Por favor, introduzca un nombre</b>";
        }
        echo $nombre;
        echo $correo;
        ?>
</form>
</body>
</html>