<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
    //Zadatak br.1
    $br1=200;
    $br2=80;
    $sum = $br1+$br2;
    $sub = $br1-$br2;
    $mul = $br1*$br2;
    $div = $br1/$br2;

    echo $sum, "<br>", $sub, "<br>", $mul, "<br>", $div;

    // Zadatak br.2 
    echo "<br>";
    $random_br= 0;
    $dani= array ("ponedeljak", "utorak", "sreda", "četvrtak", "petak", "subota", "nedelja");
    echo "Danas je ", $dani[$random_br], "!";

    // Zadatak br. 3

    echo "<br>";
    $a=5;
    $b=2;
    $c=4;
    $tsum= $a+$b+$c;
    echo  "Zbir brojeva ", $a, "," ,$b ," i ", $c, " je ", $tsum,".";


    ?>
    
    </body>
</html>