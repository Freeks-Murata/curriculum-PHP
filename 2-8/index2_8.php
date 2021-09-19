<?php
$fruits = ["りんご", "みかん", "もも"];

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value) {
        echo $key."といったら".$value."<br>";
}
?>