<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<p>
    <?php
        $testo = "Lorem ipsum dolor sit amet consectetur, adipisicing elit dolor.";
        echo "Testo: " . $testo;
    ?>
</p>

<?php
    echo "Lunghezza testo: " . strlen($testo);
?>

<p>
    <?php
        $parola = $_GET["parola"];
        $testocensurato = str_replace($parola, "***", $testo);
        echo "Testo censurato: " . $testocensurato;
    ?>
</p>

<?php
    echo "Lunghezza testo censurato: " . strlen($testocensurato);
?>
 
</body>
</html>