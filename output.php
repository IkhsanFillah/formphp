<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "halo, selamat datang ".$_POST["nama"] . " Hitam";
    echo "<br>";
    if($_POST["jk"] == "laki-laki") {
        echo "laki-laki";
    } else {
        echo "perempuan";
    }
    echo "<br>";
    echo "Bahasa Favorit : ";
    for ($i=0; $i < count($_POST["BF"]); $i++) { 
        $BF = $_POST["BF"];
        echo "$BF[$i] ";
    }

    ?>
</body>
</html>