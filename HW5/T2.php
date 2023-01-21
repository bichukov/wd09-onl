<?php
//Задание, посчитать среднюю зарплату отделов
// вывести среднюю зарплату отделов

$departments = [
    'developers' => [
        [
            'name' => 'nik',
            'position' => 'developer',
            'salary' => 900
        ],
        [
            'name' => 'sergey',
            'position' => 'developer',
            'salary' => 1200
        ],
        [
            'name' => 'andrey',
            'position' => 'developer',
            'salary' => 1400
        ]
    ],
    'managers' => [
        [
            'name' => 'yulia',
            'position' => 'manager',
            'salary' => 1150
        ],
        [
            'name' => 'darya',
            'position' => 'manager',
            'salary' => 1100
        ],
        [
            'name' => 'viktoria',
            'position' => 'manager',
            'salary' => 1000
        ]
    ],
];

$sum_developers=0;
$i=0;
$sum_managers=0;
$j=0;
foreach ($departments as $key=> $item){
    if ($key=="developers") {
        foreach ($departments[$key] as $key=> $item)
        {
            $sum_developers += $item["salary"];
            $i++;
        }

    }else{
        foreach ($departments[$key] as $key=> $item)
        {
            $sum_managers += $item["salary"];
            $j++;
        }
    }

}

print_r("Средняя зарплата отдела developers "  .intdiv($sum_developers , $i) . "\n");
print_r("Средняя зарплата отдела managers "  .intdiv($sum_managers , $j));

