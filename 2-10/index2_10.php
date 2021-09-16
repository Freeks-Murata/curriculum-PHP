<?php
function square($length,$width,$height){
    $volume=$length*$width*$height;
    echo "$length cm × $width cm × $height cm = $volume cm3";
}

square(5,10,8);
?>