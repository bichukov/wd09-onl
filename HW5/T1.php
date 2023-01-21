<?php
//Определить по восточному календарю кто Вы по знаку зодиака без использования конструкции if и массивов.
$day = "22.01";
$bDay = strtotime($day);
$sd=match (true){
    strtotime(21.03)<=$bDay && strtotime(19.04)>=$bDay=>"Вы Овен",
    strtotime(20.04)<=$bDay && strtotime(21.05)>=$bDay=>"Вы Телец",
    strtotime(21.05)<=$bDay && strtotime(20.06)>=$bDay=>"Вы Близнецы",
    strtotime(21.06)<=$bDay && strtotime(22.07)>=$bDay=>"Вы Рак",
    strtotime(23.07)<=$bDay && strtotime(22.08)>=$bDay=>"Вы Лев",
    strtotime(23.08)<=$bDay && strtotime(22.09)>=$bDay=>"Вы Дева",
    strtotime(23.09)<=$bDay && strtotime(22.10)>=$bDay=>"Вы Весы",
    strtotime(23.10)<=$bDay && strtotime(21.11)>=$bDay=>"Вы Скорпион",
    strtotime(22.11)<=$bDay && strtotime(21.12)>=$bDay=>"Вы Стрелец",
    strtotime(22.12)>=$bDay && strtotime(19.01)>=$bDay=>"Вы Козерог",
    strtotime(20.01)<=$bDay && strtotime(18.02)>=$bDay=>"Вы Водолей",
    default=>"Вы Рыбы"
};
print_r($sd . "\n") ;

//не понимаю как правильно оформить чтобы он работал как надо






