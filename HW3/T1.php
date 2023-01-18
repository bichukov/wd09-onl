<?php
$a=rand(1,100);
function detect_number($a)
{
    if($a % 2 == 0) //определяем что число четное (остаток от деления на 2 = 0)
    {
        echo "$a - Четное " ;
    }
    else
    {
        return ("Не четное - $a");
    }
}
echo detect_number($a);

