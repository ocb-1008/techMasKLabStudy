<?php

$score = [10, 20, 45, 60, 75, 89];

foreach ($score as $number) {

    if ($number >= 50) {
        print $number . "は50以上です。<br>";
    }
    else{
        print $number . "は49以下です。<br>";
    }
}
?>