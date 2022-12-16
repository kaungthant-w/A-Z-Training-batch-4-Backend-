<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13 Date & Time</title>
</head>
<body>
    <h2>13 Date & Time</h2>
    
</body>
</html>

<?php
    $d = strtotime("tomorrow");
    echo $d."<br>";
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";

    $d1 = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d1)."<br>";
    echo "<br>";
    echo "<br>";

    date_default_timezone_set('Asia/Yangon');
    echo date("D-M-Y h:i:sa");
    echo "<br>";
    echo date("D-F-Y h:i:sa");
    echo "<br>";
    echo date("D-m-Y h:i:sA");
    echo "<br>";
    echo date("d-m-Y h:i:sa");
    echo "<br>";

    $currentDate = date_create(date("d-m-y"));
    // date_add($currentDate, date_interval_create_from_date_string("10 days"));
    // echo date_format($currentDate, 'd-m-Y');

    date_add($currentDate, date_interval_create_from_date_string("5 days"));
    echo date_format($currentDate, 'd-m-Y');

    echo "<br>";

    $currentDate1 = date_create(date("d-m-y"));
    date_sub($currentDate1, date_interval_create_from_date_string("5 days"));
    echo date_format($currentDate1, 'd-m-Y');
    echo "<br>";
    echo cal_days_in_month( CAL_GREGORIAN, date('m'), date("Y"));
    echo "<br>";

    echo cal_days_in_month(CAL_GREGORIAN, 4, date("Y"));
    echo "<br>";

    echo cal_days_in_month(CAL_GREGORIAN, 8, date("Y"));
    echo "<br>";

    echo cal_days_in_month(CAL_GREGORIAN, 12, date("Y"));
    echo "<br>";

    echo cal_days_in_month(CAL_GREGORIAN, date('m'),date("Y"));

?>