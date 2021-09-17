<?php
$DecimalPoint = 15.6;
echo ceil($DecimalPoint) . "<br>";
echo floor($DecimalPoint) . "<br>";
echo round($DecimalPoint) . "<br>";

echo pi() . "<br>";

function area($radius)
{
    $area = $radius * $radius * pi();
    echo $area;
}
area(30);
echo "<br>";

echo mt_rand(500, 10000) . "<br>";

$str = "length";
echo strlen($str) . "<br>";
echo strpos($str, "g") . "<br>";
echo substr($str, 3, 6) . "<br>";
echo str_replace("ength", "oop", $str) . "<br>";

$str = "He is Hayato";
echo str_replace(" ", "", $str) . "<br>";

$str = "お絵描き";
echo strlen($str) . "<br>";
$str = "お絵描き";
echo mb_strlen($str) . "<br>";

$station = "町田";
$minute = 40;
$hour = 1;
printf("ここから%s駅まで%03d分で到着予定です。もしかしたら%02d時間かかるかもしれません。<br>", $station, $minute, $hour);

$arrival = sprintf("ここから%s駅まで%d分で到着予定です。", $station, $minute);
echo $arrival;
?>