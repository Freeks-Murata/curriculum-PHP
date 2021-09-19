<?php
$total = 0;
$dice = mt_rand(1, 6);
for ($a = 1; $a <= 40; $a++) {
    $dice = mt_rand(1, 6);
    $total += $dice;
    echo $a . "回目 = " . $dice . "<br>";
    if ($total >= 40) {
        echo "合計" . $a . "回でゴールしました";
        break;
    }
}
echo "<br><br>";

$day = intval(date("H"));
$greet = ["おはようございます", "こんにちは", "こんばんは"];
date_default_timezone_set("Asia/Tokyo");
if ($day >= 3 && $day <= 10) {
    echo "今" . date("H", time()) . "時台です" . "<br>" . $greet[0];
} else if ($day >= 11 && $day <= 16) {
    echo "今" . date("H", time()) . "時台です" . "<br>" . $greet[1];
} else {
    echo "今" . date("H", time()) . "時台です" . "<br>" . $greet[2];
}