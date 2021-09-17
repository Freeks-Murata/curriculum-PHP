<?php
$color = ["red", "blue", "green", "yellow", "pink","black"];
echo count($color)."<br>";

$zone = ["とっとり", "とうきょう", "あきた", "しまね", "おおさか"];
sort($zone);
var_dump($zone);
echo "<br>";

if (in_array("わかやま", $zone)) {
    echo "和歌山に住んでます";
} else {
    echo "和歌山に住んでません";
}
echo "<br>";

$pause = implode("且つ", $zone);
var_dump($pause);
echo "<br>";
$reverse = explode("且つ", $pause);
var_dump($reverse);