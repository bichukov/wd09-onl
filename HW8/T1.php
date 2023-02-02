<?php
//Проверка на белорусские автомобильные номера
$console = $argv[1] . $argv[2];
$regularNumber = '/[0-9]{4}\s?[A-Za-z]{2}-[0-7]/i';
$transitNumber = '/[0-9][A-Za-z]{2}[0-9]{4}/i';
$electronNumber = '/E[0-9]{3}\s?[A-Za-z]{2}-[0-7]/i';
$regularNumberTrue = preg_match($regularNumber, $console);
$isElectricNumberTrue = preg_match($electronNumber, $console);
$isTransitNumberTrue = preg_match($transitNumber, $console);
if ($regularNumberTrue == 1) {
    echo 'Номер ' . $console . ' является обычным белорусским номером';
} elseif ($isElectricNumberTrue == 1) {
    echo 'Номер ' . $console . ' является белорусским номером электромобиля';
} elseif ($isTransitNumberTrue == 1) {
    echo 'Номер ' . $console . ' является белорусским транзитным номером';
} else {
    echo 'Номер ' . $console . ' введен не верно или не является белорусским номером';
}

//Пробовал сделать не через if а через match но не вышло. Не смог разобраться как через него это реализовать.
