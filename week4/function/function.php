<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    function tampilGenap() {
        for ($i=1; $i < 10; $i++) { 
            if ($i % 2 == 1) {
                echo "$i";
            }
        }
    }
    ?>

    <h3>Bilangan ganjil dari 1 - 10 adalah</h3>
    <?php
    echo tampilGenap();
    ?>
</body>
</html>