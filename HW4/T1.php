<?php
$console=$argv[1];
if (str_contains("$console", 'https')) {
    echo "Проверка является ли сайт защищенным пройдена";
}else{ echo "Проверка является ли сайт защищенным не пройдена";}


