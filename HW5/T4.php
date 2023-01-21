<?php
//Задание убрать все повторяющиеся символы из строки и вывести их количество.
$text='Задание убрать все повторяющиеся символы из строки и вывести их количество.';

$arr =str_replace(" ", "", $text);
$split = mb_str_split($arr);

$count_values=array_count_values($split);
$str_count = "";
$TextWithoutRepetition="";
foreach ($count_values as $key =>$item){
    $TextWithoutRepetition .=$key;
    if ($item>1)
        $str_count .=("$key ".  $item ."\t");

}

print_r("Повторяющиеся сиволы в строке это: ".$str_count. "\n " ."Строка без повторяющихся сиволов: ". $TextWithoutRepetition );

