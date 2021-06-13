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

// 年・月・日の指定
//進めた時間の表示
$year = '2021';
$month = '1';
$day   = '1';
$until_sunday = date('w', strtotime(($year . '-' . $month . '-' . $day)));

for($i = 0; $i < $until_sunday ; $i++){

    $time = "+{$i}day";
    $weekday = $week[date('w', strtotime($time, strtotime("-$until_sunday day", strtotime($year . '-' . $month . '-' . $day))))];
    $date = date("m/d($weekday)", strtotime($time, strtotime("-$until_sunday day", strtotime($year . '-' . $month . '-' . $day))));
    echo $date." ";
}

for($i = 0; $i < (int)date('d', strtotime('-1 day', strtotime('+1 month', strtotime($year . '-' . $month . '-' . $day)))); $i++){
   
    //指定の日付から時間を進める
    $time = "+{$i}day";

    $weekday = $week[date('w', strtotime($time, strtotime($year . '-' . $month . '-' . $day)))];
    $date = date("m/d($weekday)", strtotime($time, strtotime($year . '-' . $month . '-' . $day)));
    echo $date." ";
    if($weekday === "土"){
    echo "<br>";
    }
}

function getTimeStamp (int $year, int $month, int $day, $offset = null): int
{
    if($offset !== null){
        
    }
    strtotime('+1 month', strtotime($year . '-' . $month . '-' . $day));
}

?>