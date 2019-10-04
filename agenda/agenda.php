<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $name=[$_POST["nombre"]];
    $_SESSION["nombre"] = $name;
    //strtolower($_POST["nombre"]);   
    $_SESSION["correo"] = strtolower($_POST["correo"]); 
    echo "Usted está registrado como ".$_SESSION["nombre"];
    $array=array($_POST["nombre"],$_POST["correo"]);
    //$_SESSION["completo"]=;
    array_push($_SESSION["completo"],$array);
    $complete=$_SESSION["completo"];
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
           // for($i=0;$i<=1;$i++){
             //   echo $name[i];
            echo $_SESSION["nombre"];
            echo "<br>";
            echo $_SESSION["correo"];
        //}
       // foreach($complete as $asdf){
            print_r($_SESSION["completo"]);
        //}
    }
        ?>
</form>
</body>
</html>