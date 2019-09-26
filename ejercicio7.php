<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php
$num=rand(0,100);
while($num!=1){
    if($num%2 ==0){
        $num=$num/2;
        echo $num."<br>";
    }else if ($num%2!=0){
        $num=$num*3+1;
        echo $num."<br>";
    }
}
?>
</body>
</html>