<?php
$file="Новое фото 1.jpg";
$format=["jpg", "jpeg", "png", "svg"];
$foundformatfile=explode(".",$file );
if (in_array($foundformatfile[1],$format )) {
    print_r('Формат валидный');
} else {
    print_r('Не подходящий формат');
}