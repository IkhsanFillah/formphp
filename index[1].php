<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>halo dunia ft PHP</h1>
    
    <!-- php = bisa banyak line-->
    <?php 
    $nama = "arif fathurrahman"; 
    $angka = 100;
    // tidak seperti cpp yang perlu tipe data

    echo "halo saya sosok asli PHP <br>";
    echo "halo nama saya $nama <br>";
    echo (date("d/m/Y")); //ada banyak format lain, bisa eksplor sendiri
    echo "<br>";
    ?>
    <!-- basic php, echo == cout<< -->

    <h1><?= "halo saya instant echo pake h1 <br>";?> </h1>
    <?= "halo saya instant echo <br>";?> 

    <!-- = adalah instant echo -->

    <h3>INPUT FORMULIR</h3>
    <form action="output.php" method="post">
        <table>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="pass" id="pass"></t>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" id="laki-laki" value="laki-laki">Laki-laki</td>
                <td><input type="radio" name="jk" id="perempuan" value="perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Bahasa Favorite</td>
                <td>:</td>
                <td><input type="checkbox" name="BF" id="JS" value="JS">Javascript</td>
                <td><input type="checkbox" name="BF" id="PHP" value="PHP">PHP</td>
                <td><input type="checkbox" name="BF" id="React" value="React">React JS</td>
                <td><input type="checkbox" name="BF" id="NextJS" value="NextJS">Next JS</td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>