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
        <label for="">Bilangan 1 :</label>
        <input type="number" name="1"><br><br>
        <label for="">Bilangan 2 :</label>
        <input type="number" name="2"><br><br>
        <label for="">Bilangan 3 :</label>
        <input type="number" name="3"><br><br>
        <label for="">Bilangan 4 :</label>
        <input type="number" name="4"><br>
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<?php

if (isset($_POST["submit"])){
    $a = $_POST["1"];
    $b = $_POST["2"];
    $c = $_POST["3"];
    $d = $_POST["4"];

$terbesar = $a;
if ($b > $terbesar) {
    $terbesar = $b;
}
if ($c > $terbesar) {
    $terbesar = $c;
}
if ($d > $terbesar) {
   $terbesar = $d;
}
echo "Bilangan terbesar adalah: " .$terbesar;
}


?>
