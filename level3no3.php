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
    if(isset($_POST["submit"])){


        $sisi1 = $_POST['bil1'];
        $sisi2 = $_POST['bil2'];
        $sisi3 = $_POST['bil3'];
        
        if ($sisi1 == $sisi2 && $sisi1 == $sisi3) {
            echo " SEGITIGA SAMA SISI";
        } elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
            echo "SEGITIGA SAMA KAKI";
        } else {
            echo "SEGITIGA SEMBARANG";
        }
        }
?>