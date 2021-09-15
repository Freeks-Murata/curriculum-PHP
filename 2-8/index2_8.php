<?php
$fluits = ["りんご", "みかん", "もも"];

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fluits as $key => $value) {
    if ($value === "りんご") {
        echo "appleといったら" . $value . "<br>";
    } else if ($value === "みかん") {
        echo "orangeといったら" . $value . "<br>";
    } else {
        echo "peachといったら" . $value;
    }
}

?>
