<?php
//Funkcija za povrsinu kruznog bazena
function PovrsinaKruga ($a) {
$sqr=pow(2*$a,2);
$pk= pi()*$sqr/4;
return $pk;
}
echo PovrsinaKruga(5). " je povrsina ovog kruga <br>";


//Funkcija za povrsinu pravougaonika

function PovrsinaPravougaonika ($b,$c) {
   $pp=$b*$c;
    return $pp;

}
echo PovrsinaPravougaonika(6,8). " je povrsina ovog pravougaonika <br>";

// Funkcija za povrsinu bazena sa polukrugom

function PovrsinaBazena ($a,$b,) {
$pb= PovrsinaPravougaonika($a,$b) + PovrsinaKruga($a)/2;
return $pb;
  
}

echo PovrsinaBazena(4,7). " je povrsina ovog bazena <br>";

// Funkcija za povrsinu svih bazena (ako su sva tri razlicitih mera)
function PovrsinaSvihBazena ($a1,$b1,$a2,$b2,$r1) {
    $psb= PovrsinaPravougaonika($a1,$b1) + PovrsinaKruga($r1) + PovrsinaBazena($a2,$b2) ;
        return $psb;
    
}
echo PovrsinaSvihBazena (6,8,4,7,5). " je povrsina svih bazena zajedno";



//Funkcija za povrsinu svih bazena (ako  im je ista stranica $a) 
function PovrsinaIstihBazena ($a,$b) {
    $pib= PovrsinaPravougaonika($a,$b) + PovrsinaKruga($a) + PovrsinaBazena($a,$b);
}


echo PovrsinaIstihBazena(6,8). " je povrsina svih bazena ako im je jednaka stranica a odnosno precnik."
 

?>