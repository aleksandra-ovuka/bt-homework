<?php

if (isset ($_GET['submit']))  {
$ap=$_GET['visinap'];
$bp=$_GET['sirinap'];
$az=$_GET['visinaz'];
$bz=$_GET['sirinaz'];

switch ($ap) {
    case (empty($ap)) :
        echo 'Niste uneli visinu plocice, vratite se natrag!';
        break;
    case (empty($bp)):
        echo "Niste uneli sirinu plocice, vratite se natrag!";
       break;
     case (empty($az)):
            echo "Niste uneli visinu zida, vratite se natrag!";
          break;
    case (empty($bz)):
             echo "Niste uneli sirinu zida, vratite se natrag!";
                break;
        case (empty($ap.$bp.$az.$bz)):
        echo "Niste uneli nista od podataka!Vratite se natrag!";
        break;
    default:
    $br_plocica=($az*$bz)/($ap*$bp);
    echo "Mere vasih plocica su $ap x $bp cm a mere vaseg zida su $az x $bz cm!";
    echo "<br> Potrebno vam je <b> tacno $br_plocica  plocica </b> kako bi poplocali ceo vas zid!";
     }


 
   

    }








?>

