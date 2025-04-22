<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION 1 PHP LUAS DAN VOLUME</title>
</head>
<body>
    <?php
    function volume($luas, $tinggi){
        $volume = $luas * $tinggi;

        echo "Volume = $volume cm";
    }

    function luasPersegi($luas, $panjang, $tinggi) {
        $luas = $panjang * $tinggi;

        echo "Luas persegi = $luas <br>";
        volume($luas, $tinggi);
    }

    $panjang = 20;
    $lebar = 10;
    $tinggi = 5;
    ?>


    <h3>PERHITUNGAN PERSEGI</h3>
    <p>Panjang persegi = <?php echo $panjang ?> </p> 
    <p>Lebar peregi    = <?php echo $lebar ?></p>
    <p>Tinggi persegi  = <?php echo $tinggi ?></p>
    <br>
    <br>
    <?php
    echo luasPersegi($luas, $tinggi, $panjang); 
    ?>
</body>
</html>