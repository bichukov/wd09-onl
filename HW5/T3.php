<?php
//Задание, имеем массив пользователей, и информацию о том, когда он последний раз менял пароль, те кто последние три месяца не меняли пароль нужно его сгенерировать и обновить (11)

$users = [
    [
        'name' => 'Kirill',
        'password' => '#`7q+3}VCz-&R&.y',
        'updated_password_at' => '10.08.2022'
    ],
    [
        'name' => 'Max',
        'password' => '%n#wSEdL~6XDKmGf',
        'updated_password_at' => '15.01.2023'
    ],
    [
        'name' => 'Andrey',
        'password' => '%NYD9Bu%Y43"vsS*',
        'updated_password_at' => '11.12.2022'
    ]
];
$day = 60 * 60 * 24;
$leng = 8;
$NewPassword = "";
foreach ($users as &$item) {
    $DayLastUpdate = time() - strtotime($item["updated_password_at"]);
    $DetailCountDays = intdiv($DayLastUpdate, $day);
    if ($DetailCountDays > 90) {
        for ($i = 0; $i < $leng; $i++) {
            $NewPassword .= chr(rand(33, 126));

        }
        $item['password'] = $NewPassword;
        print_r("Пользователь " . $item['name'] . ' последний раз менял пароль ' . $DetailCountDays .
            ' дней назад  потому ему был создан новый пароль ' . $NewPassword);

    }

}



