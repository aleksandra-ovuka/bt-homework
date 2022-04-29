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
   /* $br1=200;
    $br2=80;
    $sum = $br1+$br2;
    $sub = $br1-$br2;
    $mul = $br1*$br2;
    $div = $br1/$br2;
    echo $sum, "<br>", $sub, "<br>", $mul, "<br>", $div; */

    //Zadatak br.1 - drugi nacin
    
    function sum(int $br1, int $br2) {
        $sum = $br1 + $br2;
        return $sum;
        }
        
        echo  sum(200,80) . "<br>";

        function sub(int $br1, int $br2) {
            $sub = $br1 - $br2;
            return $sub;
            }
            
            echo  sub(200,80) . "<br>";
        
            function mul(int $br1, int $br2) {
                $mul = $br1 * $br2;
                return $mul;
                }
                
                echo  mul(200,80) . "<br>";
                function div(int $br1, int $br2) {
                    $div = $br1 / $br2;
                    return $div;
                    }
                    
                    echo  div(200,80) . "<br>";
    

   

     


    

 /*   // Zadatak br.2 
    echo "<br>";
    $random_br= 0;
    $dani= array ("ponedeljak", "utorak", "sreda", "četvrtak", "petak", "subota", "nedelja");
    echo "Danas je ", $dani[$random_br], "!"; */

    //Zadatak br.2 - drugi nacin 
    echo "<br>";
    $random_br=rand(0,6);

    if ($random_br==0) {
        echo "ponedeljak";
    }
    else if ($random_br==1) {
        echo "utorak";
    }
    else if ($random_br==2) {
        echo "sreda";
    }
    else if ($random_br==3) {
        echo "cetvrtak";
    }
    else if ($random_br==4) {
        echo "petak";
    }
    else if ($random_br==5) {
        echo "subota"; 
    }
    else if ($random_br==6) {
        echo "nedelja"; 
    }



    


    // Zadatak br. 3

    echo "<br>";
    $a=rand(1,10);
    $b=rand(1,10);
    $c=rand(1,10);
    $tsum= $a+$b+$c;
    echo  "Zbir brojeva ", $a, "," ,$b ," i ", $c, " je ", $tsum,".";









    ?>
    
    </body>
</html>