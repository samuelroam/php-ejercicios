<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["nombre"] = strtolower($_POST["nombre"]);
    $name=$_SESSION["nombre"];
       
    $_SESSION["correo"] = strtolower($_POST["correo"]);
    $email=$_SESSION["correo"];
    $_SESSION["registro"]=$_POST["registro"];
    echo "Usted está registrado como ".$_SESSION["registro"].$name;
    $array=array();
    $array["$name"]=$email;
    
    $_SESSION["completo"]=array();
    ?>
    
    <form action="#" method="post">
        <p>Introduzca su nombre <input type="text" name="nombre"></p>
        <br>
        <p>Introduzca su correo <input type="text" name="correo" placeholder="emilio"></p>
        <br>
        <input type="submit" name="submit">
        <br><br>
        <?php
        if (isset($_POST["submit"])){
            if($_SESSION["nombre"]==""){
                echo "<b>Por favor, introduzca un nombre</b>";
            };
           
            echo $_SESSION["nombre"];
            echo "<br>";
            echo $_SESSION["correo"]."<br>";
            $_SESSION["completo"][$name]=$email;
            
    }
    print_r($_SESSION["completo"]);
        ?>
</form>
</body>
</html>