<?php
$fluits = ["りんご", "みかん", "もも"];

$fluits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fluits as $key => $value) {
        echo $key."といったら".$value."<br>";
}
?>