<?php
for ($a = 1; $a <= 100; $a++) {
    if ($a % 3 == 0 && $a % 5 == 0) {
        echo "FizzBuzz!!" . "<br>";
    } else if ($a % 3 == 0) {
        echo "Fizz!" . "<br>";
    } else if ($a % 5 == 0) {
        echo "Buzz!" . "<br>";
    } else {
        echo $a . "<br>";
    }
}

?>