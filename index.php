<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW2</title>
</head>
<body>
<section id="z1">
<?

$day=rand(1, 31);
print_r($day);
if ($day>=1 &&$day<=10){
    print_r("Число " . $day ." попадает в первую дикаду");
}elseif ($day>=11 &&$day<=20){
    print_r("Число " . $day ." попадает во вторую дикаду");
}elseif ($day>=21 &&$day<=31){
    print_r("Число " . $day ." попадает в третью дикаду");
}
?>
</section>
<section id="z2">
    <?

  $a=3**6;
    if($a % 5 == 0) {
       print_r($a/5);
    }else{print_r("Число " . $a ." не кратно 5");}
    ?>
</section>
<section id="z3">
    <?

    $year=rand(1, 9999);
    print_r($year);
    if($year % 400 == 0 || ($year % 100 != 0 && ($year % 4) == 0)) {
       print_r("год високосный");
    }else{print_r("год не високосный");}
    ?>
</section>
</body>
</html>
