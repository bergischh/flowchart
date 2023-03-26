<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Bilangan 1</label>
        <input type="number" name="bil1" id=""></br></br>
        <label>Bilangan 2</label>
        <input type="number" name="bil2" id=""></br></br>
        <label>Bilangan 3</label>
        <input type="number" name="bil3" id=""></br></br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php

if (isset ($_GET["submit"])) {
    
$bil1 = $_POST["bil1"];
$bil2 = $_POST["bil2"];
$bil3 = $_POST["bil3"];

    $bilangan1 =  array($bil1, $bil2, $bil3);

    sort($bilangan1);

    echo "Bilangan urut terkecil ke terbesar : ";
    foreach ($bilangan1 as $bilangan2) {
       echo $bilangan2 . " ";
    }
}
?>