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


foreach($puertas as $lados){
	foreach($pisos as $altura){
	echo("piso");
	echo($altura);
	echo("<br>");
	};
echo($lados);
echo("puerta");
};

?>
</body>
</html>
