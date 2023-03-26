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

        <button type="submit" name="submit">Submit</button></br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];


    echo "bilangan ke-1: $bilangan1";
    echo "<br>";
    echo "bilangan ke-2: $bilangan2";
    echo "<br>";
    echo "bilangan ke-3: $bilangan3";
    echo "<br>";
    echo "<br>";

if ($bilangan1 > $bilangan2) {
    if ($bilangan2 > $bilangan3) {
        $nilaiTengah = $bilangan2;
    } elseif ($bilangan1 > $bilangan3) {
        $nilaiTengah = $bilangan3;
    } else {
        $nilaiTengah = $bilangan1;
    }
} else {
    if ($bilangan1 > $bilangan3) {
        $nilaiTengah = $bilangan1;
    } elseif ($bilangan2 > $bilangan3) {
        $nilaiTengah = $bilangan3;
    } else {
        $nilaiTengah = $bilangan2;
    }
}

echo "Bilangan dengan nilai tengah adalah: " . $nilaiTengah ;

}
?>