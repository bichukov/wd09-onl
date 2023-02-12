<?php
//За основу брал ваш вариант решения и его прорабатывал.
namespace HW9;
class DayWeekWdBd
{

    public function getNextWorkDay(int $nowDate = null, string $format = 'd.m.Y'): string
    {  $nowTime = $nowDate ?: time();
        $nowDay = date('w', $nowTime);

        if ($nowDay < 5) {
            $Day = 1;
        } else if ($nowDay == 5) {
            $Day = 3;
        } else {
            $Day = 2;
        }

        return "Следующий рабочий день ". date($format, $nowTime + ($Day * 86440));
    }
    public function getNextBirthday(int $month, int $day): float
    {
        $now = time();
        $birthDay = mktime(hour: 0, month: $month, day: $day);
        $dateDiffInSeconds = $birthDay - $now;
        $diffDay = ceil($dateDiffInSeconds / (60 * 60 * 24));


        if ($diffDay > 0) {
            return $diffDay;
        } else {
            return 365 + $diffDay;
        }

    }
    }
$DayWeekBd = new DayWeekWdBd();
$nextWorkDay = $DayWeekBd->getNextWorkDay();

$birthday = $DayWeekBd->getNextBirthday(3, 5);
print_r($birthday);