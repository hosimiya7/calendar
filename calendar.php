<?php 

$week = [
    0 => "日",
    1 => "月",
    2 => "火",
    3 => "水",
    4 => "木",
    5 => "金",
    6 => "土"
];


for($i = 1; $i <= 365; $i++){

    $weekday = $week[date('w', strtotime("+{$i}day"))];
    $date = date("n/j($weekday)", strtotime("+{$i}day"));
    echo $date;
    echo "<br>";

}

?>