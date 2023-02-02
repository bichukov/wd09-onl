<?php
error_reporting(0);
$peoples = file("peoples.csv");

$data = [];
foreach ($peoples as $line) {
    $data[] = str_getcsv($line);
}
//$data = array_map('str_getcsv', file('data.csv'));

if (!empty($_POST['country'])) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[4] == $_POST['country']) {
            $searchPeoples[] = $people;
        }
    }
} elseif (empty($_POST['country']) && !empty($_POST['name'])) {

    $searchPeoples = [];
    $sd = "";
    foreach ($data as $people) {
        $sd = preg_match("/(" . $_POST['name'] . ".*?)/i", $people[0]);
        if ($_POST['name-check'] == '') {
            if ($people[0] == $_POST['name'] || $sd == 1) {
                $searchPeoples[] = $people;
            }

        } else {
            if ($people[0] == $_POST['name']) {
                $searchPeoples[] = $people;
            }
        }
    }

} else {
    $searchPeoples = $data;
}


////Проверка на белорусские автомобильные номера
//
//$dff=preg_match("/(Клар.*?)/i",$console);
//
//if ($dff==1){ echo "ghh";}
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Codes</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label>Enter country</label>
            <input type="text" name="country" class="form-control" placeholder="Enter country">
        </div>
        <div class="form-group">
            <label>Enter name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter country">
            <input type="checkbox" name="name-check" class="form-controller" value="1">Полное совпадение
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">Region</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchPeoples as $people) : ?>
            <tr>
                <th scope="row"><?= $people[0] ?></th>
                <td><?= $people[1] ?></td>
                <td><?= $people[2] ?></td>
                <td><?= $people[3] ?></td>
                <td><?= $people[4] ?></td>
                <td><?= $people[5] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>