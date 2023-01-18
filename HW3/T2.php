<?php
$d = rand(1, 30);
$m = rand(1, 12);
$y = rand(1, 2400);
$timestamp = strtotime("$d-$m-$y");

if (idate('L', $timestamp) == 1) {
    print_r("$d-$m-$y является високосным");
} else {
    print_r("$d-$m-$y является не високосным");
}
?>