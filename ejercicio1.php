<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php

for($i=0;$i<5;$i++){
$pisos[]=$i;
};
for($i=0;$i<4;$i++){
$puertas[]=$i;
};

foreach($pisos as $altura){


foreach($puertas as $lados){
	echo("piso ");
	echo($altura);
echo(" ---> ");
	echo("puerta ");
	echo($lados);
	echo("<br>");
	};
echo("<br>");
};

?>
</body>
</html>
