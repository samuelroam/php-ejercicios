<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
        $meses=array("enero" => cal_days_in_month(CAL_GREGORIAN,1,2030),
        "febrero" => cal_days_in_month(CAL_GREGORIAN,2,2030),
        "marzo" => cal_days_in_month(CAL_GREGORIAN,3,2030),
        "abril" => cal_days_in_month(CAL_GREGORIAN,4,2030),
        "mayo" => cal_days_in_month(CAL_GREGORIAN,5,2030),
        "junio" => cal_days_in_month(CAL_GREGORIAN,6,2030),
        "lulio" => cal_days_in_month(CAL_GREGORIAN,7,2030),
        "agosto" => cal_days_in_month(CAL_GREGORIAN,8,2030),
        "septiembre" => cal_days_in_month(CAL_GREGORIAN,9,2030),
        "octubre" => cal_days_in_month(CAL_GREGORIAN,10,2030),
        "noviembre" => cal_days_in_month(CAL_GREGORIAN,11,2030),
        "diciembre" => cal_days_in_month(CAL_GREGORIAN,12,2030),
);
print_r($meses);
echo cal_days_in_month(CAL_GREGORIAN,12,2030);
    ?>
</body>
</html>