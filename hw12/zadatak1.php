<?php 

if (isset ($_GET['sub'])) {
    $starost=$_GET['starost'];
    $tezina=$_GET['tezina'];
    $zanimanje=$_GET['zanimanje'];
    switch ($zanimanje) {
    case $zanimanje=="programer" :
        $faktorakt=100;
        break;
    case "administrativni radnik":
         $faktorakt=100;
         break;
     case "menadzer":
        $faktorakt=100;
        break;
        case "vojnik":
            $faktorakt=200;
            break;
            case "policajac":
                $faktorakt=200;
                break;
                case "sportista":
                    $faktorakt=300;
                    break;
            default: $faktorakt=150;
            

        
                   
}
if ($starost>0 && $starost<= 3) 
    $fakstar=1.9;
else if ($starost>3 && $starost<= 10) 
$fakstar=1.5;
else if ($starost>10 && $starost <= 18) 
$fakstar=1.2;
else if ($starost>18 && $starost<= 26 ) 
$fakstar=1;
else if ($starost>26 && $starost<= 30 ||  $starost>49 && $starost<=60) 
$fakstar=0.8;
else if ($starost>30 && $starost<= 35 || $starost>44 && $starost<=49) 
$fakstar=0.7;
else if ($starost>36 && $starost<= 44 || $starost>60) 
$fakstar=0.6;


}
if (empty($starost.$zanimanje.$tezina)){
    echo "Niste uneli nista od podataka, molimo vas popunite sva polja!"; }
else if (empty($tezina)) { echo "Niste uneli tezinu, molimo vas popunite sva polja!";}
    else if (empty($starost)){
        echo "Niste uneli broj godina, molimo vas popunite sva polja!"; }
else if (empty ($zanimanje)) {
    echo "Niste uneli zanimanje, molimo vas popunite sva polja!";
}
else if (!empty($starost.$zanimanje.$tezina)){
$maxkalorije=$fakstar*$faktorakt*$tezina;
echo " Vi  ste $zanimanje po zanimanju,  dakle vas faktor aktivnosti je: ".$faktorakt; 
echo " <br> Vi imate $starost godina, dakle vas faktor starosti je: $fakstar";
echo "<br> Vasa tezina iznosi $tezina kg";
echo "<br> <b> Maksimalan broj kalorija koji smete da unesete nedeljno iznosi: $maxkalorije kalorija. </b>";

}





?>